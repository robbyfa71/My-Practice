<?php
    include "koneksi.php";
    $email = $_POST['email'];
    $pass = md5($_POST['paswd']);
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

    $login=mysqli_query($conn, $sql);

    $ketemu = mysqli_num_rows($login);
    $r=mysqli_fetch_array($login);

    if($ketemu>0){
        session_start();

        $_SESSION['email'] = $r['email'];
        $_SESSION['nama_lengkap'] = $r['nama_lengkap'];

        echo"USER BERHASIL LOGIN <br>";
        echo "email = ",$_SESSION['email'],"<br>";
        echo "nama lengkap = ",$_SESSION['nama_lengkap'],"<br>";
        echo "<a href = logout.php><b>LOGOUT</b></a>";
    }else{
        echo"<center>login gagal! username & password salah<br>";
        echo"<a href = form_login.php><b>ULANG LAGI</b><a></center>";
    }
    mysqli_close($conn);
?>