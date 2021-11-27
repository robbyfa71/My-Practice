<?php
//include database connection file
include_once("koneksi.php");

//ngecek jika form sudah di submit untuk mengupdate user, redirect ke homepage setelah update
if(isset($_POST['update'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgllhr = $_POST['tgllhr'];

    //update user data
    $result = mysqli_query($conn,"UPDATE mahasiswa SET nama='$nama',jkel='$jkel',alamat='$alamat',tgllhr='tgllhr' WHERE nim='$nim'");

    //redirect to homepage untuk menampilkan hasil update di daftar user
    header("location: index.php");
}

//display selected user databased on id
//getting id from url
$nim = $_GET['nim'];

//fetch user data based on id
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$nim'");

while($user_data = mysqli_fetch_array($result)){
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgllhr = $user_data['tgllhr'];
}
?>
<html>
    <head>
        <title>Edit data mahasiswa</title>
    </head>
    <body>
        <a href="index.php"> Home</a>
        <br><br>

        <form action="edit.php" name="update_mahasiswa" method="post">
            <table border="0">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="text" name="jkel" value=<?php echo $jkel;?>></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
                </tr>
                <tr>
                    <td>Tgl.Lahir</td>
                    <td><input type="text" name="tgllhr" value=<?php echo $tgllhr;?>></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>