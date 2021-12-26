<?php
require_once "../koneksi.php"; //melakukan koneksi ke database mahasiswa    

$sql = "select * from mahasiswa"; //mencari data mahasiswa  
$query= mysqli_query($conn, $sql); // memanggil query dari variable sql

while ($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}
header('content-type:application/json');
echo json_encode($data);

mysqli_close($conn);
?>