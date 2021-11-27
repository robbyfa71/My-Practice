<?php
    $host = "localhost"; //host dari database yang digunakan
    $username = "root"; //username database
    $password = ""; //password database
    $databasename = "akademik"; //nama database
    //mysqli connect sebagai function untuk menghubungkan kedalam database yang dipilih
    $conn = @mysqli_connect($host,$username,$password,$databasename);

    if (!$conn) {
        echo "Error: ".mysqli_connect_error();
        exit();
    }
?>