<?php
include 'mobil.php';
include 'merk.php';
include 'user.php';
include 'ConnDB.php';

if(isset($_POST['subInMerk']))
{
  addMerk($_POST['namamerk']);
  echo "DATA SUKSES DITAMBAHKAN";
}
else if(isset($_POST['subInAdm']))
{

}
else if(isset($_POST['subInMob']))
{

}
else if(isset($_POST['subViMerk']))
{


}
else if(isset($_POST['subViAdm']))
{


}
else if(isset($_POST['subViMob']))
{

}
else if(isset($_GET['subEdMerk']))
{


}
else if(isset($_GET['subEdAdm']))
{


}
else if(isset($_GET['subEdMob']))
{


}
else if(isset($_GET['subDeMerk']))
{


}
else if(isset($_GET['subDeAdm']))
{


}
else if(isset($_GET['subDeMob']))
{


}

function checkAuth()
{

}

function checkStatus($xRes)
{
  if(!$xRes)
  {
    echo ("Terjadi Kesalahan Koneksi. Err : " .$mysqli_error($mysqli));
  }
  else {
    echo "OK";
  }
}

 ?>
