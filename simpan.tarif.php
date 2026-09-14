<?php

// Memanggil koneksi database
include 'connection.php';

// Mengambil data dari form
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$tarif_per_jam   = $_POST['tarif_per_jam'];

// Query untuk menyimpan data tarif
$sql = "INSERT INTO tb_tarif
        (jenis_kendaraan, tarif_per_jam)
        VALUES
        ('$jenis_kendaraan', '$tarif_per_jam')";

// Menjalankan query
if ($koneksi->query($sql)) {

    // Jika berhasil, kembali ke halaman tampil tarif
    header("Location: tampil.tarif.php");
    exit;

} else {

    // Jika gagal
    echo "Data tarif gagal disimpan: " . $koneksi->error;
}

?>