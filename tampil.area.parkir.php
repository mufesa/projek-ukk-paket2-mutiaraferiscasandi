<?php

// Memanggil file koneksi.php
// File ini digunakan untuk menghubungkan PHP dengan database
require_once 'connection.php';


// Mengambil semua data dari tabel tb_area_parkir
$query = "SELECT * FROM tb_area_parkir";

// Menjalankan query menggunakan OOP
$result = $koneksi->query($query);

// Mengubah hasil query menjadi array
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>

    <!-- Judul halaman yang tampil di tab browser -->
    <title>Data Area Parkir</title>

</head>

<body>

    <!-- Judul halaman -->
    <h2>Data Area Parkir</h2>
    <a href="tambah.area.parkir.php">
        <button>Tambah Area</button>
    </a>


    <!-- Membuat tabel -->
    <table border="1">

        <!-- Baris untuk judul kolom -->
        <tr>

            <th>ID Area</th>
            <th>Nama Area</th>
            <th>Kapasitas</th>
            <th>Terisi</th>
            <th>Sisa Slot</th>
            <th>Aksi</th>

        </tr>


        <?php foreach ($data as $row) { ?>

            <?php

            // Menghitung sisa slot parkir
            // Sisa Slot = Kapasitas - Terisi
            $sisa = $row['kapasitas'] - $row['terisi'];

            ?>


            <!-- Membuat baris untuk data area parkir -->
            <tr>

                <!-- Menampilkan ID Area -->
                <td><?= $row['id_area']; ?></td>

                <!-- Menampilkan Nama Area -->
                <td><?= $row['nama_area']; ?></td>

                <!-- Menampilkan Kapasitas Parkir -->
                <td><?= $row['kapasitas']; ?></td>

                <!-- Menampilkan jumlah slot yang sudah terisi -->
                <td><?= $row['terisi']; ?></td>

                <!-- Menampilkan hasil perhitungan sisa slot -->
                <td><?= $sisa; ?></td>

                <!-- Tombol Edit -->
                <td>

                    <a href="edit.area.parkir.php?id_area=<?= 
                     $row['id_area']; ?>">
                        Edit
                    </a>

                    <a href="hapus.area.parkir.php?id_area=<?= 
                     $row['id_area']; ?>"
                     onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </a>

                

                </td>

            </tr>


        <?php } ?>


    <!-- Menutup tabel -->
    </table>

</body>

</html>