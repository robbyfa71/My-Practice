<?php
    include "../koneksi.php"; // koneksi ke database
?>
<h3>FORM PENCARIAN MAHASISWA</h3>
<!-- membuat form inputan yang datanya akan di ambil -->
<form action="" method="get">
    <label for="">Cari</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">
</form>
<?php
if(isset($_GET['cari'])){ //melakukan pengecekan ketika tombol search di klik
    $cari = $_GET['cari'];
    echo "<b> Hasil Pencarian : ".$cari."</b>";
}
?>
<!-- menampilkan hasil pencarian -->
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>kode MK</th>
        <th>Nilai</th>
    </tr>
    <?php
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $sql = "select * from KHS where nim like '%".$cari."%'"; // mencari nilai yang sesuai dengan inputan
        $tampil = mysqli_query($conn, $sql);
    }else {
        $sql = "select * from KHS";
        $tampil = mysqli_query($conn, $sql);
    }
    $no = 1;
    while($r = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $r['nim'];?></td>
        <td><?php echo $r['kode_mk'];?></td>
        <td><?php echo $r['nilai'];?></td>
    </tr>
    <?php } ?>
</table>