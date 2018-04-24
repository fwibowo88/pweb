<?php
include 'ConnDB.php';

function addMobil($xMerk,$xTipe,$xPanjang,$xLebar,$xTinggi,$xSRoda,$xRadius,$xMin,$xMax,$xMesin,$xFuel,$xVelg,$xRoda)
{
  $msgLog = "";


  $result = mysqli_query($mysqli,"INSERT INTO tblmobil
    VALUES(null,$xMerk,$xTipe,$xPanjang,$xLebar,$xTinggi,$xSRoda,$xRadius,$xMin,$xMax,$xMesin,$xFuel,$xVelg,$xRoda)");
  $msgLog = "1";

  return $msgLog;
}
function editMobil($xMID,$xMerk,$xTipe,$xPanjang,$xLebar,$xTinggi,$xSRoda,$xRad,$xMin,$xMax,$xMesin,$xTangki,$xVelg)
{
  $result = mysqli_query($mysqli,"UPDATE tblmobil SET idMerk='$xMerk',
    tipe='$xTipe',panjang='$xPanjang',lebar='$xLebar',tinggi='$xTinggi',
    jarakSumbuRoda='$xSRoda',radiusPutar='$xRad',hargaMin='$xMin',hargaMax='$xMax',
    kapasitasMesin='$xMesin',KapasitasTangki='$xTangki',ukuranVelg='$xVelg',ukuranRoda='$xRoda'
    WHERE idMobil='$xMID'");
    $msgLog = "1";


}
function deleteMobil($xID)
{
  $result = mysqli_query($mysqli,"DELETE FROM tblmobil WHERE idMobil='$xID'");
  $msgLog = "1";
}
 ?>
