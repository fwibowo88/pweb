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
      include '../engine/merk.php';
      viewMerk();
       ?>
    </table>
    <a href="#">Tambah Merk</a>
  </body>
</html>
