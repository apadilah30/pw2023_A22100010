<?php
  require "functions.php";

  if  (isset($_POST["tambah"])) {
    if(tambah($_POST) > 0){
      echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href='latihan3.php';
      </script>";
    } else {
      echo "Data gagal ditambahkan";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Tambah Data Mahasiswa</title>
</head>
<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label>
          NRP :
          <input type="text" name="nrp" required>
        </label>
      </li>
      <li>
        <label>
          Email :
          <input type="email" name="email" required>
        </label>
      </li>
      <li>
        <label>
          Jurusan :
          <input type="text" name="jurusan" required>
        </label>
      </li>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah</button>
      </li>
    </ul>
  </form>
</body>
</html>