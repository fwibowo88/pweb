<?php include '../engine/auth.php';
sesCheck();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>DAFTAR USER</h1>
    <hr>
    <table border="1">
      <tr>
        <th>USERNAME</th>
        <th>NAMA ADMIN</th>
      </tr>
      <?php
      include '../engine/user.php';
      viewUser();
      ?>
    </table>
    <a href="inputAdmin.php">TAMBAH ADMIN</a><br>
    <a href="menuAdmin.php">Back to Menu</a>
  </body>
</html>
