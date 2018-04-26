<?php

$srvName = "my.fwibowo.com"; //SERVER ADDRESS OR IP SERVER
$srvUser = "developer"; // USER ID TO DATABASE
$srvPWD = "rahasia"; //PWD TO ACCESS DATABASE
$dbName = "dbotoweb"; //DATABASE NAME

$mysqli = mysqli_connect($srvName,$srvUser,$srvPWD,$dbName);

/*
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
*/


 ?>
