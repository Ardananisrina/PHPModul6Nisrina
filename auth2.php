<?php

defined('_VALID') or die('not allowed');
function init_login(){
  $pass = 'P@ssw0rd123';
  if(isset($_POST['pass'])){
    $p = trim($_POST['pass']);
    if ($p === $pass){
      setcookie('nlogin', $p);
      setcookie('time', time());
      ?>
      <script type="text/javascript">
      document.location.href="./";
      </script>

      <?php
    } else {
      echo 'Password tidak sesuai';
      return false;
    }
  }
}
function validate(){
  if(!isset($_COOKIE['nlogin']) || !isset($_COOKIE['time'])){ ?>

      <div class="inner">
        <form action="" method="post">
          <table border="0" align="center" cellpadding="0" cellpadding="10" bgcolor="#abcdef">
            <tr>
              <td>Nama</td>
              <td>Nisrina</td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="pass"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="submit" value="LOGIN"></td>
            </tr>
          </table>
        </form>
      </div>
    <?php
      exit;
      }
      if(isset($_GET['m']) && $_GET['m'] == 'logout'){
        if(isset($_COOKIE['nlogin'])){
          setcookie('login', '', time() - 3*3600);
        }
        if(isset($_COOKIE['time'])){
          setcookie('time', '', time() - 3*3600);
        }
        ?>
        <?php
      }
      }
?>
