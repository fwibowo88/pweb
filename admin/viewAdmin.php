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
        <th>PWD</th>
        <th>SALT</th>
      </tr>
      <?php
      include '../engine/proses.php';
      viewUser();
      ?>
    </table>
<a href="inputAdmin.php">TAMBAH ADMIN</a>
  </body>
</html>
