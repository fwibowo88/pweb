<?php
include 'ConnDB.php';


  function addMerk($xMerk)
  {
    global $mysqli;
    $result = mysqli_query($mysqli,"INSERT INTO tblMerk VALUES(null,'$xMerk')");

  }
  function editMerk($xID,$xMerk)
  {
    global $mysqli;
    $result = mysqli_query($mysqli,"UPDATE tblMerk SET namaMerk='$xMerk' WHERE idMerk='$xID'");
  }
  function deleteMerk($xID)
  {
    global $mysqli;
    $result = mysqli_query($mysqli,"DELETE FROM tblMerk WHERE idMerk='$xID'");
  }


 ?>
