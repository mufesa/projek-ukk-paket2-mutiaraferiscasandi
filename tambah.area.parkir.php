<?php
// Memanggil file koneksi database
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Area Parkir</title>
</head>

<body>

    <!-- Judul halaman -->
    <h2>Tambah Data Area Parkir</h2>

    <!--
        Form digunakan untuk memasukkan data.
        Data akan dikirim ke simpan_area.php
        menggunakan method POST.
    -->
    <form action="simpan.area.parkir.php" method="POST">

    <!-- Input ID Area -->
        <label>ID Area</label>
        <input type="number" name="id_area" required>

        <br><br>

        <!-- Input nama area -->
        <label>Nama Area</label>
        <input type="text" name="nama_area" required>

        <br><br>

        <!-- Input kapasitas area -->
        <label>Kapasitas</label>
        <input type="number" name="kapasitas" required>

        <br><br>

        <!-- Input jumlah kendaraan yang terisi -->
        <label>Terisi</label>
        <input type="number" name="terisi" required>

        <br><br>

        <!-- Tombol untuk mengirim data -->
        <button type="submit">Tambah Data</button>

    </form>

</body>

</html>