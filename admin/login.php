<?php
session_start();
include '../engine/auth.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN TO ADMIN PAGE</title>
  </head>
  <body>
    <h1>PLEASE INPUT YOUR USERNAME & PASSWORD</h1>
    <hr>
<form action="login.php" method="post">
<input type="text" name="uname" value="" placeholder="USERNAME">
<input type="password" name="pwd" value="" placeholder="PASSWORD">
<input type="submit" name="btnLogin" value="LOGIN">
</form>


<?php
	//$uname = $_POST["uname"];
	//$pwd = $_POST["pwd"];
	if(isset($_POST["uname"]))
	{
		authCheck($_POST["uname"], $_POST["pwd"]);	
		//echo $_POST["uname"];
		//echo $_POST["pwd"];
	}
	
?>
  </body>
</html>
