<?php

// Memanggil file koneksi database
include 'connection.php';

// Mengambil data dari form menggunakan method POST
$id_area = $_POST['id_area'];
$nama_area = $_POST['nama_area'];
$kapasitas = $_POST['kapasitas'];
$terisi = $_POST['terisi'];

// Membuat query untuk menyimpan data area parkir
$sql = "INSERT INTO tb_area_parkir
        (id_area, nama_area, kapasitas, terisi)
        VALUES
        ('$id_area', '$nama_area', '$kapasitas', '$terisi')";

// Menjalankan query menggunakan OOP
if ($koneksi->query($sql)) {

    // Jika berhasil, kembali ke halaman tampil area parkir
    header("Location: tampil.area.parkir.php");
    exit;

} else {

    // Jika gagal, menampilkan pesan error
    echo "Data area parkir gagal disimpan: " . $koneksi->error;
}

?>