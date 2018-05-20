<?php
include '../engine/auth.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN TO ADMIN PAGE</title>
  </head>
  <body>
    <h1>Login to System</h1>
    <hr>
    <form action="../engine/auth.php" method="POST">
      <input type="text" name="uname" value="" placeholder="USERNAME">
      <input type="password" name="pwd" value="" placeholder="PASSWORD">
      <input type="submit" name="btnLogin" value="LOGIN">
    </form>
  </body>
</html>
