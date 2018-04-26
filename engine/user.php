<?php
include 'ConnDB.php';


function addUser($xID, $xNama, $xPwd,$xSalt)
{
  $result = mysqli_query($mysqli,"INSERT INTO tbladmin
    VALUES('$xID','$xNama','$xPwd','$xSalt')");
}
function editUser($xID,$xNama,$xPwd,$xSalt)
{
  $result = mysqli_query($mysqli,"UPDATE tbladmin
    SET namaAdmin='$xNama', passwordAdmin='$xPWD',saltAdmin='$xSalt' WHERE userID='$xID'");
}
function deleteUser($xID)
{
  $result = mysqli_query($mysqli,"DELETE FROM tbladmin WHERE userID='$xID'");
}

function authUser($uid,$pwd)
{


}
 ?>
