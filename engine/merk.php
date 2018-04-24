<?php
include 'ConnDB.php';

function addMerk($xMerk)
{
  $result = mysqli_query($mysqli,"INSERT INTO tblMerk VALUES(null,'$xMerk')");
  $msgLog = "1";

  //retun $msgLog;
}
function editMerk($xID,$xMerk)
{
  $result = mysqli_query($mysqli,"UPDATE tblMerk SET namaMerk='$xMerk' WHERE idMerk='$xID'");
  $msgLog = "1";

  //retun $msgLog;
}
function deleteMerk($xID)
{
  $result = mysqli_query($mysqli,"DELETER FROM tblMerk WHERE idMerk='$xID'");
  $msgLog = "1";

  //retun $msgLog;

}

 ?>
