<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Set Session</title>
  </head>
  <body>

    <?php

    //inisialisasi data Session
    session_start();
    //set session jika belum ada
    if (!isset($_SESSION['test'])){
      $_SESSION['test'] = 'value';

    } else {
      echo 'Session di-set <br/>';
      //Mencetak nilai session gmp_test
      echo 'Nilai : ' .$_SESSION['test']. '<br/>';

      //mencetak semua elemen session
      print_r($_SESSION);
    }
    ?>
    <p>
      Tekan Refresh (F5);
  </body>
</html>
