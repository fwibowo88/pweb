<?php
include '../engine/auth.php';
sesCheck();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>DAFTAR MOBIL</h1>
    <hr>
    <h4>Cari Mobil</h4>

    <form action="viewMobil.php" method="GET" style="height:40px;">
      <input type="text" name="txtCari" value="" size="50">
      <input type="submit" name="btnCariMobil" value="Cari">
    </form>

    <table border="1">
      <tr>
        <th>ID MOBIL</th>
        <th>MERK</th>
        <th>TIPE</th>
        <th>PANJANG</th>
        <th>LEBAR</th>
        <th>TINGGI</th>
        <th>JARAK RODA</th>
        <th>RADIUS</th>
        <th>minPRICE</th>
        <th>maxPRICE</th>
        <th>MESIN</th>
        <th>TANGKI</th>
        <th>VELG</th>
        <th>RODA</th>
        <th>FOTO</th>
      </tr>
      <?php
      include '../engine/proses.php';
      $val = "";
      if(isset($_GET['txtCari']))
      {
        $val = $_GET['txtCari'];
      }
      viewMobil($val);
       ?>
    </table>
    <a href="inputMobil.php">TAMBAH MOBIL</a><br>
    <a href="menuAdmin.php">Back to Menu</a>
  </body>
</html>
