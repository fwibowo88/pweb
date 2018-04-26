<?php
include 'ConnDB.php';

session_start();

$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

function authCheck()
{
  $res = mysqli_query($mysqli,"SELECT * FROM tbladmin WHERE userID='$uname' AND passwordAdmin='$pwd'");

  $count = mysqli_num_rows($res);

  if($count > 0)
  {
    $_SESSION['usr'] = $uname;
    $_SESSION['stat'] = "on";
    header("location:admin/index.php");
  }
  else {
    header("location:index.php?msg=fail");
  }

}
function sesCheck()
{
  if($_SESSION['stat']!="on")
  {
    header("location:index.php?msg=unknown");
  }

}
function errLog()
{
  $msg = $_GET['msg'];
  if($msg === "fail")
  {
    echo "USERNAME or PASSWORD SALAH.";

  }
  else if($msg === "unknown")
  {
    echo "UNAUTHORIZED ACCESS PLEASE LOGIN";
  }
  else if($msg === "usrOff")
  {
    echo "YOU ARE LOGGED OFF";
  }
}
function logOut()
{
  session_destroy();
  header("location:index.php?msg=usrOFF");
}

?>
