<?php
session_start();
include "../koneksi.php";
$id_user = $_POST['id_user'];
$pass = md5($_POST['passwd']);
$sql = "SELECT * FROM user WHERE nama_lengkap = '$id_user' AND password = '$pass'";

if($_POST["captcha_code"]==$_SESSION["captcha_code"]){
    $login = mysqli_query($conn, $sql);
    $ketemu= mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);
    if($ketemu>0){
        $_SESSION['id_user'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];
        echo " USER BERHASIL LOGIN<br>";
        echo " id_user = ",$_SESSION['id_user'],"<br>";
        echo " password = ",$_SESSION['passuser'],"<br>";
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