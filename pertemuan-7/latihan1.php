<?php
// Membuat koneksi ke database & pilih database
$conn = mysqli_connect("localhost","root","","pabw_pertemuan7");

// Query ke tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// Ubah data ke dalam array
// $row = mysqli_fetch_row($result); array numeric
// $row = mysqli_fetch_assoc($result); array associative
// $row = mysqli_fetch_array($result); keduanya
$rows = [];

while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel mahasiswa
$mahasiswa = $rows;
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

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php 
      $no = 1; 
      foreach ($mahasiswa as $item)  :
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><img src="<?= $item["gambar"] ?>" width="60"></td>
      <td><?= $item["nrp"] ?></td>
      <td><?= $item["nama"] ?></td>
      <td><?= $item["email"] ?></td>
      <td><?= $item["jurusan"] ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </table>
</body>
</html>