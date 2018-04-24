<?php

$srvName = "localhost"; //SERVER ADDRESS OR IP SERVER
$srvUser = "root"; // USER ID TO DATABASE
$srvPWD = "mysql"; //PWD TO ACCESS DATABASE
$dbName = "dota_f"; //DATABASE NAME

try {
  $mysqli = mysqli_connect($srvName,$srvUser,$srvPWD,$dbName);
} catch (Exception $err) {
  echo "KESALAHAN" .$err;
}

 ?>
