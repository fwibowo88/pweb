<?php include '../engine/auth.php';
sesCheck();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INPUT USER</title>
  </head>
  <body>
    <h1>INPUT USER</h1>
    <hr>
<form action="../engine/proses.php" method="POST">
  USERNAME : <input type="text" name="uname" value=""><br>
  PASSWORD : <input type="text" name="pwd" value=""><br>
  RETYPE PASSWORD : <input type="text" name="rePwd" value=""><br>
  FULL NAME : <input type="text" name="name" value=""><br>
<input type="submit" name="subInAdm" value="SIMPAN">
</form>
  </body>
</html>
