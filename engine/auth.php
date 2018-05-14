<?php
include 'ConnDB.php';

session_start();

//$uname = $_POST['uname'];
//$pwd = $_POST['pwd'];

function authCheck($uname, $pwd)
{
  $mysqli = new mysqli("localhost","root","","dbotoweb");
  $res = mysqli_query($mysqli,"SELECT * FROM admin WHERE nama='".$uname."' AND password='".$pwd."'");
  $count = mysqli_num_rows($res);

  if($count > 0)
  {
    $_SESSION['usr'] = $uname;
    $_SESSION['stat'] = "on";
    header("location:viewMobil.php");
    //print_r($_SESSION);
    //echo "berhasil";
  }
  else {
    //header("location:index.php?msg=fail");
    echo "gagal";
    echo $count;
  }

}
function sesCheck()
{
  if($_SESSION['stat']!="on")
  {
    header("location:login.php");
    echo "Please login first";
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
