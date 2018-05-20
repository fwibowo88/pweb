<?php include '../engine/auth.php';
sesCheck();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Merk</title>
  </head>
  <body>
    <h1>EDIT DATA MERK</h1>
    <hr>
    <form action="../engine/proses.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
      ID MERK :<input type="text" name="txtID" value="<?php echo $_GET['id']?>" size="5" disabled><br>
      MERK : <input type="text" name="brand" value=""><br>
      <input type="submit" name="subEdMerk" value="SIMPAN">
    </form>
  </body>
</html>
