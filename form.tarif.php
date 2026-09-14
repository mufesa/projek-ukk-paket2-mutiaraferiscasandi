<?php

// Memanggil file koneksi database
include 'connection.php';

// Mengecek apakah data dikirim menggunakan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Mengambil data ID tarif dari form
    $id_tarif = $_POST['id_tarif'];


    // Mengambil data jenis kendaraan dari form
    $jenis_kendaraan = $_POST['jenis_kendaraan'];

    // Mengambil data tarif per jam dari form
    $tarif_per_jam = $_POST['tarif_per_jam'];

    // Membuat query untuk menambahkan data
    $query = "INSERT INTO tb_tarif
              (id_tarif, jenis_kendaraan, tarif_per_jam)
              VALUES ('$id_tarif','$jenis_kendaraan', '$tarif_per_jam')";

    // Menjalankan query menggunakan OOP
    $result = $koneksi->query($query);

    // Mengecek apakah data berhasil ditambahkan
    if ($result) {

        // Jika berhasil
        echo "Data berhasil ditambahkan!";

        echo "<br><br>";

        // Link untuk kembali ke halaman tampil data
        echo "<a href='tampil.tarif.php'>Lihat Data Tarif</a>";

    } else {

        // Jika gagal
        echo "Data gagal ditambahkan!";
    }
}

// Menutup koneksi database
$koneksi->close();

?>