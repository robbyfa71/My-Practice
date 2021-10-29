<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4 Validation</title>
    <style>
        .error{
            color:#FF0000;
        }
    </style>
</head>
<body>
    <?php
    # define variable and set to empty values
    $namaErr = $emailErr = $genderErr = $websiteErr = "";
    $nama = $email = $gender = $comment = $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nama"])){
            $namaErr = "Nama Harus Diisi";
        }else{
            $nama = test_input($_POST["nama"]);
        }
        if(empty($_POST["email"])){
            $emailErr = "email harus diisi";
        }else{
            $email = testinput($_POST["email"]);
            //check id email address is well-formed
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Email tidak sesuai format";
            }
        }
    
        if(empty($_POST["website"])){
            $website ="";
        }else{
            $website = test_input($_POST["website"]);
        }
    
        if(empty($_POST["comment"])){
            $comment="";
        }else{
            $comment=test_input($_POST["comment"]);
        }
    
        if(empty($_POST["gender"])){
            $genderErr = "Gender Harus dipilih";
        }else{
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Posting Komentar</h2>
    <p><span class ="error">*Harus diisi</span></p>

    <form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                <td>Nama : </td>
                <td>
                    <input type="text" name="nama"><span class="error">*<?php echo $namaErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Website : </td>
                <td>
                    <input type="text" name="website"><span class=error>* <?php echo $websiteErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Komentar : </td>
                <td>
                    <textarea name="comment"cols="40" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>gender : </td>
                <td>
                    <input type="radio" name="gender" value="L"> Laki - Laki
                    <input type="radio" name="gender" value="P"> Perempuan
                    <span class="error">* <?php echo $genderErr;?></span> 
                </td>
            </tr>
            <td>
                <input type="submit" name="submit" value="submit">
            </td>
        </table>
    </form>
    <table border="3">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Website</td>
            <td><?php echo $website ?></td>
        </tr>
        <tr>
            <td>Komentar</td>
            <td><?php echo $comment ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender ?></td>
        </tr>
    </table>
</body>
</html>