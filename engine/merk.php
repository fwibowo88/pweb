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
  function viewMerk()
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"SELECT * FROM tblMerk");

    while($data = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>".$data['idMerk']."</td>";
      echo "<td>".$data['namaMerk']."</td>";
      echo "<td><a href='edit.php?id=#'>Edit</a>";
    }
  }
  function makeOption()
  {
      global $mysqli;

      $result = mysqli_query($mysqli,"SELECT * FROM tblMerk");

      while($data = mysqli_fetch_array($result))
      {
        echo "<option value='".$data['idMerk']."'>" .$data['namaMerk'] ."</option>";
      }
  }

 ?>
