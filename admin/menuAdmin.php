<?php include '../engine/auth.php';
sesCheck();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MAIN MENU</title>
  </head>
  <body>
    <h1>WELCOME <?php echo $_SESSION['usr']; ?>,</h1>
    <div id="User">
      <a href="viewAdmin.php">USER ADMINISTRATION</a>
    </div>
    <div id="Car">
      <a href="viewMobil.php">CAR ADMINISTRATION</a>
    </div>
    <div id="Brand">
      <a href="viewMerk.php">BRAND ADMINISTRATION</a>
    </div>
    <a href="logout.php">LOGOUT</a>
  </body>
</html>
