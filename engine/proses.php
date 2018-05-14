<?php
include 'mobil.php';
include 'merk.php';
include 'user.php';

if(isset($_POST['subInMerk']))
{

  addMerk($_POST['brand']);
  echo "DATA SUKSES DITAMBAHKAN";
}
else if(isset($_POST['subInAdm']))
{
  //GET VALUE
  $tmpUname = $_POST['uname'];
  $tmpName = $_POST['name'];
  $tmpPwd = $_POST['pwd'] ;
  $tmpRPwd = $_POST['rePwd'] ;

  if($tmpPwd != $tmpRPwd)
  {
    echo "<a href='../admin/inputAdmin.php'>BACK TO INPUT ADMIN</a>";
  }
  //ENCRYPTING PWD
  $enc = encryptUser($tmpPwd);
  $split = explode("-",$enc);
  $encrPwd = $split[0];
  $tmpSalt = $split[1];

  addUser($tmpUname,$tmpName,$encrPwd,$tmpSalt);
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
else if(isset($_POST['subEdMerk']))
{
  $tmpID = $_POST['id'];
  $tmpBrand = $_POST['brand'];

  editMerk($tmpID,$tmpBrand);

}
/*
else if(isset($_POST['subEdAdm']))
{
  $tmpID = $_POST['uname'];
  $tmpName = $_POST['pwd'];
  $tmpPwd = $_POST['rePwd'];
  $tmpSalt = xx;

  editUser($xID,$xNama,$xPwd,$xSalt);
}*/
else if(isset($_GET['subEdMob']))
{
  $tmpID = $_GET['id'];
  $tmpIDMerk = $_GET['brand'];
  $tmpTipe = $_GET['type'];
  $tmpPanjang =$_GET['length'];
  $tmpLebar = $_GET['weight'];
  $tmpTinggi = $_GET['height'];
  $tmpJarak = $_GET['jarakRoda'];
  $tmpRadius = $_GET['radius'];
  $tmpHMin = $_GET['pMin'];
  $tmpHMax = $_GET['pMax'];
  $tmpKapMesin = $_GET['machineCap'];
  $tmpKapTangki = $_GET['tankCap'];
  $tmpVelg = $_GET['rimSize'];
  $tmpRoda = $_GET['wheelSize'];

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
 ?>
