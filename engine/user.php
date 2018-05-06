<?php
include 'ConnDB.php';

function addUser($xUid,$xNama, $xPwd,$xSalt)
{
  global $mysqli;

  $result = mysqli_query($mysqli,"INSERT INTO tbladmin
    VALUES('$xUid','$xNama','$xPwd','$xSalt')");
}
function editUser($xID,$xNama,$xPwd,$xSalt)
{
  global $mysqli;

  $result = mysqli_query($mysqli,"UPDATE tbladmin
    SET namaAdmin='$xNama', passwordAdmin='$xPWD',saltAdmin='$xSalt' WHERE userID='$xID'");
}
function deleteUser($xID)
{
  global $mysqli;

  $result = mysqli_query($mysqli,"DELETE FROM tbladmin WHERE userID='$xID'");
}
function viewUser()
{
  global $mysqli;

  $result = mysqli_query($mysqli,"SELECT * FROM tblAdmin");

  while($data = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$data['userID']."</td>";
    echo "<td>".$data['namaAdmin']."</td>";
    echo "<td>".$data['passwordAdmin']."</td>";
    echo "<td>".$data['saltAdmin']."</td>";
    echo "<td><a href='edit.php?id=#'>Edit</a>";
  }
}

 ?>
