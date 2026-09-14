<?php
// Memanggil file koneksi database
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Tarif</title>
</head>

<body>

    <!-- Judul halaman -->
    <h2>Tambah Data Tarif</h2>

    <!--
        Form digunakan untuk memasukkan data.
        Data akan dikirim ke simpan_tarif.php
        menggunakan method POST.
    -->
    <form action="simpan.tarif.php" method="POST">

    <!-- Input ID Tarif -->
        <label>ID Tarif</label>
        <input type="number" name="id_tarif" required>

        <br><br>

        <!-- Input Jenis Kendaraan -->
        <label>Jenis Kendaraan</label>
        <input type="text" name="jenis_kendaraan" required>

        <br><br>

        <!-- Input Tarif Per Jam -->
        <label>Tarif Per Jam</label>
        <input type="number" name="tarif_per_jam" required>

        <br><br>


        <!-- Tombol untuk mengirim data -->
        <button type="submit">Tambah Data</button>

    </form>

</body>

</html>