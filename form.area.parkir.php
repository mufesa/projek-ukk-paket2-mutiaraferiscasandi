<?php

// Memanggil file koneksi database
include 'connection.php';

// Mengecek apakah data dikirim menggunakan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Mengambil data ID area dari form
    $id_area = $_POST['id_area'];


    // Mengambil data nama area dari form
    $nama_area = $_POST['nama_area'];

    // Mengambil data kapasitas dari form
    $kapasitas = $_POST['kapasitas'];

    // Mengambil data jumlah yang sudah terisi
    $terisi = $_POST['terisi'];

    // Membuat query untuk menambahkan data
    $query = "INSERT INTO tb_area_parkir
              (id_area, nama_area, kapasitas, terisi)
              VALUES ('$id_area','$nama_area', '$kapasitas', '$terisi')";

    // Menjalankan query menggunakan OOP
    $result = $koneksi->query($query);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {

        // Jika berhasil
        echo "Data berhasil ditambahkan!";

        echo "<br><br>";

        // Link untuk kembali ke halaman tampil data
        echo "<a href='tampil.area.parkir.php'>Lihat Data Area Parkir</a>";

    } else {

        // Jika gagal
        echo "Data gagal ditambahkan!";
    }
}

// Menutup koneksi database
$koneksi->close();

?>