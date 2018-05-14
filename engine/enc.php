<?php

function encryptUser($xPwd)
{
  $tmpPwd = md5($xPwd);
  $salt = strlen($xPwd);
  $encPwd = $tmpPwd .$salt;
  $encFin = md5($encPwd);

  return $encFin ."-" .$salt;
}

$app = encryptUser("a");

$val = explode("-",$app);
print_r($val);
echo "<br>";
echo "Salt : " .$val[1];

function dePict()
{
  unlink("../images/1.jpg");
}
dePict();
 ?>
