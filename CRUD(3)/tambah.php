<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <a href="index.php">Go to Home</a>
    <br><br>
    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="jkel"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>tgl. lahir</td>
                <td><input type="date" name="tgllhr"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <?php
    //check  jika form disubmit, masukkan data ke user table
    if(isset($_POST['Submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jkel= $_POST['jkel'];
        $alamat = $_POST['alamat'];
        $tgllhr = $_POST['tgllhr'];

        //include database connection file
        include_once("koneksi.php");

        //insert user data into table
        $result = mysqli_query($conn, "INSERT INTO mahasiswa(nim, nama, jkel, alamat, tgllhr) VALUES('$nim','$nama','$jkel', '$alamat', '$tgllhr')");

        // show message when user added
        echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>