<?php
  include 'ConnDB.php';


  function addMobil($xMerk,$xTipe,$xPanjang,$xLebar,$xTinggi,$xSRoda,$xRadius,$xMin,$xMax,$xMesin,$xFuel,$xVelg,$xRoda)
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"INSERT INTO tblmobil
      VALUES(null,'$xMerk','$xTipe','$xPanjang','$xLebar','$xTinggi','$xSRoda','$xRadius','$xMin','$xMax','$xMesin','$xFuel','$xVelg','$xRoda')");
      $last_id = mysqli_insert_id($mysqli);
      handlingFile($last_id,"add");
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
    handlingFile($xID,"del");
  }
  function viewMobil()
  {
    include 'merk.php';
    global $mysqli;

    $result = mysqli_query($mysqli,"SELECT * FROM tblMobil");

    while($data = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$data['idMobil']."</td>";
      findMerk($data['idMerk']);
      echo "<td>".$data['tipe']."</td>";
      echo "<td>".$data['panjang']."</td>";
      echo "<td>".$data['lebar']."</td>";
      echo "<td>".$data['tinggi']."</td>";
      echo "<td>".$data['jarakSumbuRoda']."</td>";
      echo "<td>".$data['radiusPutar']."</td>";
      echo "<td>".$data['hargaMin']."</td>";
      echo "<td>".$data['hargaMax']."</td>";
      echo "<td>".$data['kapasitasMesin']."</td>";
      echo "<td>".$data['kapasitasTangki']."</td>";
      echo "<td>".$data['ukuranVelg']."</td>";
      echo "<td>".$data['ukuranRoda']."</td>";
      echo "<td>" ."<img src='../images/" .$data['idMobil'] .".jpg' height='20' width='20'>" ."</td>";
      echo "<td><a href='editMobil.php?id=".$data['idMobil']."'>Edit</a>";
    }
  }
  function handlingFile($xID,$act)
  {
    if($act === "add")
    {
      if($_FILES['carImg']['name'])
      {
        if(!$_FILES['carImg']['error'])
        {
          $message="";
          $file_info = getimagesize($_FILES['carImg']['tmp_name']);
          if(empty($file_info)){
            $message .= "uploaded file doesn't seem to be an image.";
          }
          else{
            $message = 'Congratulations ! Your file was accepted.';
          }

          move_uploaded_file($_FILES['carImg']['tmp_name'], "../images/".$xID.".jpg");

        }else{
          $message = "Error : ".$_FILES['carImg']['error'];
        }
      }
      else{
        die('You did not select any file!');
      }
    }
    else {
      unlink("../images/".$xID.".jpg");
    }

  }
 ?>
