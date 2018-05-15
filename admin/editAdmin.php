<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Admin</title>
  </head>
  <body>
    <h1>EDIT DATA ADMIN</h1>
    <hr>
    <form class="" action="../engine/proses.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        USERNAME : <input type="text" name="uname" value="<?php echo $_GET['id'] ?>" disabled><br>
        PASSWORD : <input type="text" name="pwd" value=""><br>
        RETYPE PASSWORD : <input type="text" name="rePwd" value=""><br>
        FULL NAME : <input type="text" name="name" value=""><br>
      <input type="submit" name="subEdAdm" value="SIMPAN">
    </form>
  </body>
</html>
