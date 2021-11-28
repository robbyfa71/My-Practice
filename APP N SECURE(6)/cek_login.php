<?php
session_start();
include "../koneksi.php"; // menghubungkan ke database
$id_user = $_POST['id_user']; // mengambil inputan dari form yang disimpan di dalam variable
$pass = md5($_POST['passwd']);
$em = $_POST['Email'];
$sql = "SELECT * FROM user WHERE nama_lengkap = '$id_user' AND password = '$pass'"; // mengecek keseusaian didalam database

if($_POST["captcha_code"]==$_SESSION["captcha_code"]){
    $login = mysqli_query($conn, $sql);
    $ketemu= mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
    if($ketemu>0){ // kondisi apalbila query ditemukan
        $_SESSION['id_user'] = $r['id_user']; //session array yang di ambil dari inputan
        $_SESSION['passuser'] = $r['password'];
        $_SESSION['emai'] = $r['email'];
        echo " USER BERHASIL LOGIN<br>";
        echo " id_user = ",$_SESSION['id_user'],"<br>";
        echo " password = ",$_SESSION['passuser'],"<br>";
        echo " email = ",$_SESSION['emai'],"<br>";
        echo "<a href=form_login.php><b>LOGOUT</b></a>";
    }else{
        echo"<center> LOGIN GAGAL ! USERNAME DAN PASSWORD SALAH<br>";
        echo"<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
    }
    mysqli_close($conn);
}else{
    echo"<center> LOGIN GAGAL ! CAPTCHA TIDAK SESUAI<br>";
    echo"<a href=form_login.php><b> ULANGI LAGI</b></a></center>";
}
?>