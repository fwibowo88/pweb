<?php include '../engine/auth.php';
sesCheck();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INPUT MERK</title>
  </head>
  <body>
    <h1>INPUT MERK BARU</h1>
    <hr>
    <form action="../engine/proses.php" method="POST">
      <input type="text" name="brand" value="">
      <input type="submit" name="subInMerk" value="SIMPAN">
    </form>
  </body>
</html>
