<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WELCOME TO OTO WEB</title>
  </head>
  <body>
    <h1>CAR LIST</h1>
    <hr>
<form action="compare.php" method="POST">
  <table border="1">
    <tr>
      <th></th>
      <th>TIPE</th>
      <th>MERK</th>
      <th>PANJANG</th>
      <th>LEBAR</th>
      <th>TINGGI</th>
      <th>MESIN</th>
      <th>TANGKI</th>
      <th>VELG</th>
    </tr>
    <?php
    include '/engine/client.php';
    viewMobil();
     ?>
  </table>
  <input type="submit" name="btnCompare" value="Compare">
</form>
  </body>
</html>
