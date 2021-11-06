<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id_user = '$id'";
mysqli_query($conn, $sql);
mysqli_close($conn);

header('location: tampil_user.php');
?>