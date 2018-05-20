<?php
include 'mobil.php';
include 'user.php';
include 'merk.php';

if(isset($_POST['subInMerk']))
{
  addMerk($_POST['brand']);
  echo "DATA SUKSES DITAMBAHKAN <br>";
  echo '<a href="../admin/viewMerk.php">Back To Merk</a>';
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

  echo "DATA SUKSES DIUBAH <br>";
  echo '<a href="../admin/viewMerk.php">Back To Merk</a>';
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
else if(isset($_POST['subEdMob']))
{
  $tmpID = $_POST['id'];
  $tmpIDMerk = $_POST['brand'];
  $tmpTipe = $_POST['type'];
  $tmpPanjang =$_POST['length'];
  $tmpLebar = $_POST['weight'];
  $tmpTinggi = $_POST['height'];
  $tmpJarak = $_POST['jarakRoda'];
  $tmpRadius = $_POST['radius'];
  $tmpHMin = $_POST['pMin'];
  $tmpHMax = $_POST['pMax'];
  $tmpKapMesin = $_POST['machineCap'];
  $tmpKapTangki = $_POST['tankCap'];
  $tmpVelg = $_POST['rimSize'];
  $tmpRoda = $_POST['wheelSize'];

  editMobil($tmpID,$tmpIDMerk,$tmpTipe,$tmpPanjang,$tmpLebar,$tmpTinggi,$tmpJarak,
  $tmpRadius,$tmpHMin,$tmpHMax,$tmpKapMesin,$tmpKapTangki,$tmpVelg,$tmpRoda);
}
else if(isset($_GET['btnCariMobil']))
{
  
  $tmpVal = $_GET['txtCari'];
  viewMobil("cari",$tmpVal);
}
else if(isset($_GET['subDeMerk']))
{
  $tmpID = $_GET['idMerk'];
  deleteMerk($tmpID);
  echo "DATA TELAH TERHAPUS";
}
else if(isset($_GET['subDeAdm']))
{
  $tmpID = $_GET['idMerk'];
  deleteUser($tmpID);
  echo "DATA TELAH TERHAPUS";
}
else if(isset($_GET['subDeMob']))
{
  $tmpID = $_GET['idMobil'];
  deleteMobil($tmpID);
  echo "DATA TELAH TERHAPUS";
}
 ?>
