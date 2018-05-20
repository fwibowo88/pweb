<?php include '../engine/auth.php';
sesCheck();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Input Mobil</title>
  </head>
  <body>
    <h1>INPUT DATA MOBIL</h1>
    <hr>
<form id="frmData" method="POST" enctype="multipart/form-data">
  Brand : <select name="brand">
    <?php
    include '../engine/merk.php';
    makeOption("");
    ?>
  </select> <br>
  Tipe : <input type="text" name="type" value=""enc> <br>
  Panjang : <input type="number" name="length" value=""> mm <br>
  Lebar : <input type="number" name="weight" value=""> mm <br>
  Tinggi : <input type="number" name="height" value=""> mm<br>
  Jarak Sumbu Roda : <input type="number" name="jarakRoda" value=""> mm<br>
  Radius Putar : <input type="number" name="radius" value="">mm <br>
  Harga Max : <input type="number" name="pMax" value=""> IDR <br>
  Harga Min :<input type="number" name="pMin" value=""> IDR <br>
  Kapasitas Mesin : <input type="number" name="machineCap" value=""> cc<br>
  Kapasitas Tangki :<input type="number" name="tankCap" value=""> cc<br>
  Ukuran Velg : <input type="number" name="rimSize" value=""> inch<br>
  Ukuran Roda : <input type="text" name="wheelSize" value=""> inch<br>
  Upload Gambar : <input type="file" name="carImg" value="" required> max 2MB<br>
<button id="btnSimpan" type="button" name="button">SIMPAN</button>
</form>
<script type="text/javascript">
$("#btnSimpan").click(function(){
  alert("OK");
  var formData = new FormData($("#frmData")[0]);
  $.ajax({
    url: '../engine/proses.php?inputMobil=ok',
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
