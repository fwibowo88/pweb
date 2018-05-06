<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>DAFTAR MOBIL</h1>
    <hr>
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
      </tr>
      <?php
      include '../engine/mobil.php';
      viewMobil();
       ?>
    </table>
    <a href="#">TAMBAH MOBIL</a>
  </body>
</html>
