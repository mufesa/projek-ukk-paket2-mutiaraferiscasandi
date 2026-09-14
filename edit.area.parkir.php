<?php

// Memanggil file koneksi
include 'connection.php';

// Mengecek apakah id_area dikirim melalui URL
if (!isset($_GET['id_area']) || !is_numeric($_GET['id_area'])) {
    die("ID area tidak valid.");
}

$id_area = (int) $_GET['id_area'];

// Mengambil data berdasarkan id_area menggunakan prepared statement
$stmt = $koneksi->prepare("SELECT * FROM tb_area_parkir WHERE id_area = ?");
$stmt->bind_param("i", $id_area);
$stmt->execute();

$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Mengecek apakah data ditemukan
if (!$row) {
    die("Data area parkir tidak ditemukan.");
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Area Parkir</title>
</head>

<body>

    <h2>Edit Data Area Parkir</h2>

    <form action="update.area.parkir.php" method="POST">

        <!-- ID area disimpan agar ikut dikirim -->
        <input type="hidden" name="id_area"
            value="<?= htmlspecialchars($row['id_area']); ?>">

        <label for="nama_area">Nama Area</label>
        <input type="text"
            id="nama_area"
            name="nama_area"
            value="<?= htmlspecialchars($row['nama_area']); ?>"
            required>

        <br><br>

        <label for="kapasitas">Kapasitas</label>
        <input type="number"
            id="kapasitas"
            name="kapasitas"
            value="<?= htmlspecialchars($row['kapasitas']); ?>"
            min="0"
            required>

        <br><br>

        <label for="terisi">Terisi</label>
        <input type="number"
            id="terisi"
            name="terisi"
            value="<?= htmlspecialchars($row['terisi']); ?>"
            min="0"
            required>

        <br><br>

        <button type="submit">Simpan Perubahan</button>

    </form>

</body>

</html>

<?php
$stmt->close();
$koneksi->close();
?>
