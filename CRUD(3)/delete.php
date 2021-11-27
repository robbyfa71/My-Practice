<?php
//include database connection file
include_once("koneksi.php");

//get id from url to delete  that user
$nim = $_GET['nim'];

//delete user row from table base on given id
$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '$nim'");

//setelah menghapus redirect ke homepage, dan tampilkan hasil delete
header("location: index.php");
?>