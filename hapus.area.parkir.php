<?php

include 'connection.php';

// Mengambil id_area dari URL
$id_area = $_GET['id_area'] ?? '';

// Mengecek id_area
if (empty($id_area)) {
    echo "ID area tidak ditemukan!";
    exit;
}

// Query untuk menghapus data
$query = "DELETE FROM tb_area_parkir WHERE id_area = ?";

// Menyiapkan query
$stmt = $koneksi->prepare($query);

// Mengecek query
if (!$stmt) {
    echo "Query gagal diproses!";
    exit;
}

// Mengisi parameter id_area
$stmt->bind_param("i", $id_area);

// Menjalankan query
if ($stmt->execute()) {

    // Jika berhasil, kembali ke halaman tampil area parkir
    header("Location: tampil.area.parkir.php");
    exit;

} else {

    // Jika gagal
    echo "Data gagal dihapus!";
}

// Menutup koneksi
$stmt->close();
$koneksi->close();

?>
