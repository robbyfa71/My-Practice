<?php
        echo"<h2>Tambah User</h2>

        <form method=post action=input_user.php>
            <table>
                <tr>
                    <td>Password</td>
                    <td>: <input type=password name=password></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input type=text name=nama></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>: <input type=text name=email></td>
                </tr>
                <tr>
                    <td colspan=2> <input type=submit value=SIMPAN></td>
                </tr>
            </table>
        </form>";
?>