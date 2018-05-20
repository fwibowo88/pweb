<?php
include 'ConnDB.php';
include 'user.php';

session_start();

function authCheck($uname, $pwd)
{
  global $mysqli;
  $res = mysqli_query($mysqli,"SELECT * FROM tbladmin WHERE userID='".$uname."' AND passwordAdmin='".$pwd."'");
  $count = mysqli_num_rows($res);

  if($count > 0)
  {
    $_SESSION['usr'] = $uname;
    $_SESSION['stat'] = "on";
    print_r($_SESSION);
    header("location:../admin/menuAdmin.php");
  }
  else {
    echo "Username atau Password Salah.<br>";
    echo "<a href='../admin/login.php'>Back To Login</a>";

  }
}

function sesCheck()
{
  if($_SESSION['stat'] !="on")
  {
    header("Location:login.php");
  }
}

function logOut()
{
  session_destroy();
}

//Handling Login Form
if(isset($_POST['btnLogin']))
{
  $tmpID = $_POST["uname"];
  $tmpPWD = $_POST["pwd"];

  $xPWD = encryptUser($tmpPWD);

  $split = explode("-",$xPWD);
  $encrPwd = $split[0];

  authCheck($tmpID,$encrPwd);
}
?>
