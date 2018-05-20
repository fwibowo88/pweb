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
    <h1>DAFTAR MERK</h1>
    <hr>
    <table border="1">
      <tr>
        <th>ID MERK</th>
        <th>MERK</th>
      </tr>
      <?php
      include '../engine/proses.php';
      viewMerk();
       ?>
    </table>
    <a href="inputMerk.php">Tambah Merk</a><br>
    <a href="menuAdmin.php">Back to Menu</a>
  </body>
</html>
