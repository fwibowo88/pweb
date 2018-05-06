<?php
include 'mobil.php';
include 'merk.php';
include 'user.php';
include 'ConnDB.php';

if(isset($_POST['subInMerk']))
{
  addMerk($_POST['brand']);
  echo "DATA SUKSES DITAMBAHKAN";
}
else if(isset($_POST['subInAdm']))
{
  $tmpUname = $_POST['uname'];
  $tmpName = $_POST['name'];
  $tmpPwd = $_POST['pwd'] ;
  $tmpSalt = 'xx';

  addUser($tmpUname,$tmpName,$tmpPwd,$tmpSalt);
}

else if(isset($_POST['subInMob']))
{
  echo $tmpIDMerk = $_POST['brand'];
  echo $tmpTipe = $_POST['type'];
  echo $tmpPanjang = $_POST['length'];
  echo $tmpLebar = $_POST['weight'];
  echo $tmpTinggi = $_POST['height'];
  echo $tmpJarak = $_POST['jarakRoda'];
  echo $tmpRadius = $_POST['radius'];
  echo $tmpHMin = $_POST['pMin'];
  echo $tmpHMax = $_POST['pMax'];
  echo $tmpKapMesin = $_POST['machineCap'];
  echo $tmpKapTangki = $_POST['tankCap'];
  echo $tmpVelg = $_POST['rimSize'];
  echo $tmpRoda = $_POST['wheelSize'];
  addMobil($tmpIDMerk,$tmpTipe,$tmpPanjang,$tmpLebar,$tmpTinggi,$tmpJarak,
  $tmpRadius,$tmpHMin,$tmpHMax,$tmpKapMesin,$tmpKapTangki,$tmpVelg,$tmpRoda);
  
}
/*
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
  $tmpID = $_GET['idMerk'];
  $tmpBrand = $_GET['brand'];

  editMerk($tmpID,$tmpBrand);

}
else if(isset($_GET['subEdAdm']))
{
  $tmpID = ;
  $tmpName = ;
  $tmpPwd = ;
  $tmpSalt = ;

  editUser();
}
else if(isset($_GET['subEdMob']))
{
  $tmpID = ;
  $tmpIDMerk = ;
  $tmpTipe = ;
  $tmpPanjang =;
  $tmpLebar = ;
  $tmpTinggi = ;
  $tmpJarak = ;
  $tmpRadius = ;
  $tmpHMin = ;
  $tmpHMax = ;
  $tmpKapMesin = ;
  $tmpKapTangki = ;
  $tmpVelg = ;
  $tmpRoda = ;

  editMobil($tmpID,$tmpIDMerk,$tmpTipe,$tmpPanjang,$tmpLebar,$tmpTinggi,$tmpJarak,
  $tmpRadius,$tmpHMin,$tmpHMax,$tmpKapMesin,$tmpKapTangki,$tmpVelg,$tmpRoda);

}
else if(isset($_GET['subDeMerk']))
{
  $tmpID = $_GET['idMerk'];
  deleteMerk($tmpID);
}
else if(isset($_GET['subDeAdm']))
{
  $tmpID = $_GET['idMerk'];
  deleteUser($tmpID);
}
else if(isset($_GET['subDeMob']))
{
  $tmpID = $_GET['idMerk'];
  deleteMobil($tmpID);
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
*/
 ?>
