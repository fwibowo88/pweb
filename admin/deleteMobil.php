<?php
include '../engine/auth.php';
sesCheck();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DELETE MOBIL</title>
  </head>
  <body>
    <h1>HAPUS MOBIL</h1>
    <hr>
    <form action="../engine/proses.php" method="GET">
      ID Mobil : <input type="text" name="idMobil" value="<?php echo $_GET['id']; ?>" >
      <input type="submit" name="subDeMob" value="DELETE">
    </form>
  </body>
</html>
