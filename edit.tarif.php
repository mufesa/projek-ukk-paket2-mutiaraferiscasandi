<?php

// Memanggil file koneksi
// ../ digunakan untuk kembali ke folder utama
include 'connection.php';

// Mengambil id_tarif dari URL
$id_tarif = $_GET['id_tarif'];

// Query untuk mengambil data berdasarkan id_tarif
$query = "SELECT * FROM tb_tarif WHERE id_tarif = '$id_tarif'";

// Menjalankan query
$result = $koneksi->query($query);

// Mengubah hasil query menjadi array
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Tarif</title>
</head>

<body>

    <h2>Edit Data Tarif</h2>

    <?php foreach ($data as $row) { ?>

        <!-- Form untuk mengubah data -->
        <form action="update.tarif.php" method="POST">

            <!-- ID tarif disimpan agar ikut dikirim -->
            <input type="hidden" name="id_tarif"
                value="<?= $row['id_tarif']; ?>">

            <label>Jenis Kendaraan</label>
            <input type="text" name="jenis_kendaraan"
                value="<?= $row['jenis_kendaraan']; ?>" required>

            <br><br>

            <label>Tarif Per Jam</label>
            <input type="number" name="tarif_per_jam"
                value="<?= $row['tarif_per_jam']; ?>" required>

            <br><br>

            <button type="submit">Simpan Perubahan</button>

        </form>

    <?php } ?>

</body>

</html>