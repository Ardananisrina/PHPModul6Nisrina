<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Halaman Administrator</title>
    <style media="screen">
      .inner{
        margin: 200px auto;
        padding: 20px;
        width: 240px;
        border: 1px solid #333;
      }
    </style>
  </head>
  <body>
    <?php
    ini_set('display_errors', 1);
    define('_VALID', 1);

    //include file eksternal
    require_once('./auth.php');
    init_login();
    validate();
    ?>
    <h3>Simulasi Halaman Admin</h3>
    <p><a href="?m=logout">Logout</a>
    <p>Menu-menu admin ada di sini
  </body>
</html>
