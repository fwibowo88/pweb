<?php
include '../engine/auth.php';
sesCheck();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Edit Mobil</title>
  </head>
  <body>
    <h1>EDIT DATA MOBIL</h1>
    <hr>
    <?php
    include '../engine/mobil.php';
    $tmp = findMobil($_GET['id']);
     ?>

    <form method="POST" id='frmData' enctype="multipart/form-data">
      <input type="text" name="id" value="<?php echo $_GET['id'] ?>">
      Brand : <select name="brand">
        <?php
        include '../engine/merk.php';
        makeOption($tmp['idMerk']);
        ?>
      </select> <br>
      Tipe : <input type="text" name="type" value="<?php echo $tmp['tipe']; ?>"> <br>
      Panjang : <input type="number" name="length" value="<?php echo $tmp['panjang']; ?>"> mm <br>
      Lebar : <input type="number" name="weight" value="<?php echo $tmp['lebar']; ?>"> mm <br>
      Tinggi : <input type="number" name="height" value="<?php echo $tmp['tinggi']; ?>"> mm<br>
      Jarak Sumbu Roda : <input type="number" name="jarakRoda" value="<?php echo $tmp['jarakSumbuRoda']; ?>"> mm<br>
      Radius Putar : <input type="number" name="radius" value="<?php echo $tmp['radiusPutar']; ?>">mm <br>
      Harga Max : <input type="number" name="pMax" value="<?php echo $tmp['hargaMax']; ?>"> IDR <br>
      Harga Min :<input type="number" name="pMin" value="<?php echo $tmp['hargaMin']; ?>"> IDR <br>
      Kapasitas Mesin : <input type="number" name="machineCap" value="<?php echo $tmp['kapasitasTangki']; ?>"> cc<br>
      Kapasitas Tangki :<input type="number" name="tankCap" value="<?php echo $tmp['kapasitasMesin']; ?>"> cc<br>
      Ukuran Velg : <input type="number" name="rimSize" value="<?php echo $tmp['ukuranVelg']; ?>"> inch<br>
      Ukuran Roda : <input type="text" name="wheelSize" value="<?php echo $tmp['ukuranRoda']; ?>"> inch<br>
      Upload Gambar : <input type="file" name="carImg" value=""> <img src='../images/<?php echo $tmp['idMobil']; ?>.jpg' width="70" height="70"> max 2MB<br>
      <button type="button" id="btnEdit">Edit</button>
    </form>

    <script type="text/javascript">
    $("#btnEdit").click(function(){
      alert("S");
      var formData = new FormData($("#frmData")[0]);
      $.ajax({
        url: '../engine/proses.php?editMobil=ok',
        type: 'POST',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData:false,
        success: function(response){
          alert(response);
        }
      });
    });
    </script>
  </body>
</html>
