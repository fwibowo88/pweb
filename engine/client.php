<?php
include 'ConnDB.php';

function viewMobil()
{
  global $mysqli;
  include 'merk.php';
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
    echo "<td>" ."<img src='images/".$data['idMobil'].".jpg' height='50' widtd='50'>" ."</td>";
    echo "</tr>";
  }
}

function compareMobil($xMobil)
{
  global $mysqli;
  include 'merk.php';

  foreach($xMobil as $mobil)
  {
    $result = mysqli_query($mysqli,"SELECT * FROM tblmobil WHERE idMobil=$mobil");

    while($data = mysqli_fetch_array($result))
    {
      echo "<table style='display:inline'>
            <tr>
              <td class='title'>".$data['tipe']."</td>
            </tr>
            <tr>
              <td><img src='images/".$data['idMobil'].".jpg' height='70' widtd='70'></td>
            </tr>
            <tr>";
            echo findMerk($data['idMerk']);
      echo  "</tr>
            <tr>
              <td>".$data['panjang']."mm - ".$data['lebar']."mm - ".$data['tinggi']." mm</td>
            </tr>
            <tr>
              <td>".$data['jarakSumbuRoda']." mm</td>
            </tr>
            <tr>
              <td>".$data['radiusPutar']." mm</td>
            </tr>
            <tr>
              <td>".$data['hargaMin']." - ".$data['hargaMax']." JT</td>
            </tr>
            <tr>
              <td>".$data['kapasitasTangki']." liter</td>
            </tr>
            <tr>
              <td>".$data['kapasitasMesin']." cc</td>
            </tr>
            <tr>
              <td>".$data['ukuranVelg']." inch</td>
            </tr>
            <tr>
              <td>".$data['ukuranRoda']."</td>
            </tr>
          </table>";
    }
  }


}
 ?>
