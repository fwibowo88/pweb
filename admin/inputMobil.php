<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>INPUT NEW CAR</h1>
    <hr>
<form action="../engine/proses.php" method="POST">
  Brand : <input type="text" name="brand" value=""> <br>
  Tipe : <input type="text" name="type" value=""> <br>
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
  Upload Gambar : <input type="file" name="carImg" value=""> max 2MB<br>
<input type="submit" name="subInMob" value="SIMPAN">
</form>
  </body>
</html>
