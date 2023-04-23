<?php
  require("functions.php");
  
  // ambil ID dari URL
  $id = $_GET["id"];
  
  // query untuk ambil data berdasarkan ID
  $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>
<body>
  <h3>Detail Mahasiswa</h3>

  <ul>
    <li><img src="<?= $mahasiswa["gambar"] ?>" height="60"></li>
    <li>NRP : <?= $mahasiswa["nrp"] ?> </li>
    <li>Nama : <?= $mahasiswa["nama"] ?> </li>
    <li>Email : <?= $mahasiswa["email"] ?> </li>
    <li>Jurusan : <?= $mahasiswa["jurusan"] ?> </li>
    <li>
      <a href="">ubah</a> | <a href="">hapus</a>
    </li>
    <li>
      <a href="latihan3.php">Kembali ke daftar mahasiswa</a>
    </li>
  </ul>
</body>
</html>