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
    $result = mysqli_query($mysqli,"UPDATE tblMerk SET namaMerk='$xMerk' WHERE idMerk=$xID");
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
      echo "<td><a href='editmerk.php?id=".$data['idMerk']."'>Edit</a>";
      echo "</tr>";
    }
  }

  function findMerk($xID)
  {
    global $mysqli;

    $result = mysqli_query($mysqli,"SELECT namaMerk FROM tblMerk WHERE idMerk=$xID");
    while($data = mysqli_fetch_array($result)){
      echo "<td>".$data['namaMerk']."</td>";
    }
  }

  function makeOption($tmpID)
  {
      global $mysqli;

      $result = mysqli_query($mysqli,"SELECT * FROM tblMerk");
      $select = "";
      while($data = mysqli_fetch_array($result))
      {
        if($data['idMerk']==$tmpID)
        {
          $select = "selected";
        }
        echo "<option value='".$data['idMerk']."'".$select.">" .$data['namaMerk'] ."</option>";
      }
  }
 ?>
