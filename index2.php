<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tugas Membuat Halaman Autentikasi</title>
    <style type="text/css" media="screen">
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

      require_once('./auth2.php');

      init_login();
      validate();
    ?>
    <marquee>Assalamualaikum</marquee>
    <h4>Web Nisrina Izdihar</h4>
    <a href="?m=logout">LOGOUT</a>
  </body>
</html>
