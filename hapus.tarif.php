<?php

include 'connection.php';

// Mengambil id_tarif dari URL
$id_tarif = $_GET['id_tarif'] ?? '';

// Mengecek id_tarif
if (empty($id_tarif)) {
    echo "ID tarif tidak ditemukan!";
    exit;
}

// Query untuk menghapus data
$query = "DELETE FROM tb_tarif WHERE id_area = ?";

// Menyiapkan query
$stmt = $koneksi->prepare($query);

// Mengecek query
if (!$stmt) {
    echo "Query gagal diproses!";
    exit;
}

// Mengisi parameter id_tarif
$stmt->bind_param("i", $id_tarif);

// Menjalankan query
if ($stmt->execute()) {

    // Jika berhasil, kembali ke halaman tampil parkir
    header("Location: tampil.tarif.parkir.php");
    exit;

} else {

    // Jika gagal
    echo "Data gagal dihapus!";
}

// Menutup koneksi
$stmt->close();
$koneksi->close();

?>
