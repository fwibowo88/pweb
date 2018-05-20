<?php
if(!isset($_POST['idMobil']))
{
  header('Location:index.php');
}
else if(count($_POST['idMobil'])<2)
{
  echo "Anda hanya memilih 1 Mobil, Tambahkan Pilihan lain.<br>";
  echo "<a href='index.php'>Back</a>";
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      td{border:1px solid black;}
      .title{text-align: center; font-weight: bold;}
    </style>
    <meta charset="utf-8">
    <title>COMPARE RESULT</title>
  </head>
  <body>
    <h1>Result : Found Comparing <?php echo count($_POST['idMobil']); ?> cars</h1>
    <table style="display:inline">
      <tr>
        <th></th>
      </tr>
      <tr>
        <th style="border:1px solid black;  height:75px;">IMAGE</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">MERK</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">DIMENSI</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">JARAK SUMBU RODA</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">RADIUS PUTAR</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">HARGA</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">KAPASITAS TANGKI</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">MESIN</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">UKURAN VELG</th>
      </tr>
      <tr>
        <th style="border:1px solid black;">UKURAN RODA</th>
      </tr>
    </table>
    <?php
    include '/engine/client.php';
    compareMobil($_POST['idMobil']);?>
  </body>
</html>
<?php
//print_r($_POST['idMobil']);

 ?>
