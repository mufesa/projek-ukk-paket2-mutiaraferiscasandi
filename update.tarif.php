<?php

// Memanggil file koneksi database
include 'connection.php';

// Mengambil data yang dikirim dari form
$id_tarif = $_POST['id_tarif'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$tarif_per_jam = $_POST['tarif_per_jam'];

// Membuat query untuk mengubah data tarif
$sql = "UPDATE tb_tarif SET
        jenis_kendaraan = '$jenis_kendaraan',
        tarif_per_jam = '$tarif_per_jam'
        WHERE id_tarif = '$id_tarif'";

// Menjalankan query
if ($koneksi->query($sql)) {

    // Jika berhasil, kembali ke halaman tampil tarif
    header("Location: tampil.tarif.php");
    exit;

} else {

    // Jika gagal, tampilkan pesan error
    echo "Data gagal diubah: " . $koneksi->error;
}

?>