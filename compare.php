<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>COMPARE RESULT</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>MERK</th>
      </tr>
      <?php viewMerk(); ?>
    </table>
  </body>
</html>


<?php
include "/engine/ConnDB.php";

/*$srvName = "localhost"; //SERVER ADDRESS OR IP SERVER
$srvUser = "root"; // USER ID TO DATABASE
$srvPWD = ""; //PWD TO ACCESS DATABASE
$dbName = "dbotoweb"; //DATABASE NAME

$mysqli = mysqli_connect($srvName,$srvUser,$srvPWD,$dbName);
*/
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

 ?>
