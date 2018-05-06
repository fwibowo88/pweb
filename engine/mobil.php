<?php
  include 'ConnDB.php';

  function addMobil($xMerk,$xTipe,$xPanjang,$xLebar,$xTinggi,$xSRoda,$xRadius,$xMin,$xMax,$xMesin,$xFuel,$xVelg,$xRoda)
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"INSERT INTO tblmobil
      VALUES(null,'$xMerk','$xTipe','$xPanjang','$xLebar','$xTinggi','$xSRoda','$xRadius','$xMin','$xMax','$xMesin','$xFuel','$xVelg','$xRoda')");

  }
  function editMobil($xMID,$xMerk,$xTipe,$xPanjang,$xLebar,$xTinggi,$xSRoda,$xRad,$xMin,$xMax,$xMesin,$xTangki,$xVelg)
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"UPDATE tblmobil SET idMerk='$xMerk',
      tipe='$xTipe',panjang='$xPanjang',lebar='$xLebar',tinggi='$xTinggi',
      jarakSumbuRoda='$xSRoda',radiusPutar='$xRad',hargaMin='$xMin',hargaMax='$xMax',
      kapasitasMesin='$xMesin',KapasitasTangki='$xTangki',ukuranVelg='$xVelg',ukuranRoda='$xRoda'
      WHERE idMobil='$xMID'");
  }
  function deleteMobil($xID)
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"DELETE FROM tblmobil WHERE idMobil='$xID'");
  }
  function viewMobil()
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"SELECT * FROM tblMobil");

    while($data = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$data['idMobil']."</td>";
      echo "<td>".$data['idMerk']."</td>";
      echo "<td>".$data['tipe']."</td>";
      echo "<td>".$data['panjang']."</td>";
      echo "<td><a href='edit.php?id=#'>Edit</a>";
    }
  }
 ?>
