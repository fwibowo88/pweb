<?php
include 'ConnDB.php';
include 'merk.php';

function viewMobil()
{
  global $mysqli;

  $result = mysqli_query($mysqli,"SELECT * FROM tblmobil");

  while($data = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td><input type='checkbox' name='idMobil[]' value='".$data['idMobil']."'></td>";
    echo "<td>".$data['tipe']."</td>";
    echo findMerk($data['idMerk']);
    echo "<td>".$data['panjang']." MM</td>";
    echo "<td>".$data['lebar']." MM</td>";
    echo "<td>".$data['tinggi']." MM</td>";
    echo "<td>".$data['kapasitasMesin']." CC</td>";
    echo "<td>".$data['kapasitasTangki']." L</td>";
    echo "<td>".$data['ukuranVelg']." INCH</td>";
    echo "</tr>";
  }
}

function compareMobil()
{
  
}
 ?>
