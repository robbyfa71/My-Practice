<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>form login</title>
  </head>
  <body class="bg-ligh">
    <!-- form -->
<div class="container-fluid" style="height:600px;">
    <form action="cek_login.php" method="post">
        <table class="bg-success p-5 m-auto mt-5 " style="border-radius:20px;">
            <tr>
                <td>
                <marquee behavior="scroll" direction="left">FORM LOGIN</marquee>
                </td>
            </tr>
            <tr>
                <td class="p-3" colspan=2>
                    <input class="form-control w-100" name="id_user" type="text" placeholder="Nama Lengkap" aria-label="default input example"> 
                </td>
            </tr>
            <tr>
                <td class="p-3" colspan=2>
                    <input class="form-control" type="password" name="passwd" placeholder="Password">
                </td>
            </tr>
            <tr>
                <td class="p-3" colspan=2>
                    <input class="form-control" type="email" name="Email" placeholder="email">
                </td>
            </tr>
            <tr>
                <td class = "p-3"><input class="form-control" name="captcha_code" type="text" placeholder="Kode Captcha"></td>
                <td class="p-3"><img src="captcha.php"></td>
            </tr>
            <tr>
                <td class="p-3" colspan=2>
                    <input class="btn btn-primary w-100" type="submit" value="login">
                </td>
            </tr>
        </table>
    </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>