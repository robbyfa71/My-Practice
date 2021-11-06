<?php
echo "<h2>USER</h2>
    <form method=POST action=form_user.php>
        <input type=submit value=tambah user>
    </form>
    <table border=1>
        <tr>
            <th>id</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>";
    

    include "koneksi.php";
    $sql = "SELECT * FROM user ORDER BY id_user";
    $tampil = mysqli_query($conn, $sql);

    if (mysqli_num_rows($tampil)>0) {
        $no = 1;
        while ($r = mysqli_fetch_array($tampil)) {
            echo"<tr>
            <td>$r[id_user]</td>
            <td>$r[nama_lengkap]</td>
            <td>$r[email]</td>
            <td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
            </tr>";
                $no++;
        }
        echo "</table>";
    }else{
        echo "0 results";
    }
    mysqli_close($conn);
    ?>
