<?php
require("functions.php");

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>
<body>
  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data</a>
  <br>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php 
      $no = 1; 
      foreach ($mahasiswa as $item)  :
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><img src="<?= $item["gambar"] ?>" width="60"></td>
      <td><?= $item["nama"] ?></td>
      <td>
        <a href="detail.php?id=<?= $item["id"] ?>">lihat detail</a>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</body>
</html>