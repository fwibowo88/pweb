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

  function editMobil($xMID,$xMerk,$xTipe,$xPanjang,$xLebar,$xTinggi,$xSRoda,$xRad,$xMin,$xMax,$xMesin,$xTangki,$xVelg,$xRoda)
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"UPDATE tblmobil SET idMerk='$xMerk',
      tipe='$xTipe',panjang='$xPanjang',lebar='$xLebar',tinggi='$xTinggi',
      jarakSumbuRoda='$xSRoda',radiusPutar='$xRad',hargaMin='$xMin',hargaMax='$xMax',
      kapasitasMesin='$xMesin',KapasitasTangki='$xTangki',ukuranVelg='$xVelg',ukuranRoda='$xRoda'
      WHERE idMobil=$xMID");
  }

  function deleteMobil($xID)
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"DELETE FROM tblmobil WHERE idMobil='$xID'");
    handlingFile($xID,"del");
  }

  function viewMobil($xMerk)
  {
    global $mysqli;
    //PAGINATION
    $limit = 5;
    $page = isset($_GET['page'])? (int)$_GET["page"]:1;
    $awal = ($page>1) ? ($page * $limit) - $limit : 0;

      $result = mysqli_query($mysqli,"SELECT * FROM tblmobil c, tblmerk m WHERE c.idMerk = m.idMerk AND m.namaMerk LIKE '%".$xMerk."%'LIMIT $awal,$limit");
      $total = mysqli_query($mysqli,"SELECT COUNT(*)AS hasil FROM tblmobil c, tblmerk m WHERE c.idMerk = m.idMerk AND m.namaMerk LIKE '%".$xMerk."%'");


    $xData = mysqli_fetch_array($total);
    $jum = $xData['hasil'];
    $pages = ceil($jum/$limit);

    for($x=1;$x<=$pages;$x++)
    {
      echo "<a href='?page=$x'>$x<a>";
    }
    //QUERY RESULT
    while($data = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$data['idMobil']."</td>";
      echo findMerk($data['idMerk']);
      echo "<td>".$data['tipe']."</td>";
      echo "<td>".$data['panjang']." mm</td>";
      echo "<td>".$data['lebar']." mm</td>";
      echo "<td>".$data['tinggi']." mm</td>";
      echo "<td>".$data['jarakSumbuRoda']." mm</td>";
      echo "<td>".$data['radiusPutar']." mm</td>";
      echo "<td>".$data['hargaMin']." IDR</td>";
      echo "<td>".$data['hargaMax']." IDR</td>";
      echo "<td>".$data['kapasitasMesin']." CC</td>";
      echo "<td>".$data['kapasitasTangki']." L</td>";
      echo "<td>".$data['ukuranVelg']." INCH</td>";
      echo "<td>".$data['ukuranRoda']." INCH</td>";
      echo "<td>" ."<img src='../images/" .$data['idMobil'] .".jpg' height='50' width='50'>" ."</td>";
      echo "<td><a href='editMobil.php?id=".$data['idMobil']."'>Edit</a>";
      echo "<td><a href='deleteMobil.php?id=".$data['idMobil']."'>Delete</a>";
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
