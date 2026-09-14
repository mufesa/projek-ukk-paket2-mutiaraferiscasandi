<?php

// Memanggil file koneksi.php
// File ini digunakan untuk menghubungkan PHP dengan database
require_once 'connection.php';


// Mengambil semua data dari tabel tb_tarif
$query = "SELECT * FROM tb_tarif";

// Menjalankan query menggunakan OOP
$result = $koneksi->query($query);

// Mengubah hasil query menjadi array
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>

    <!-- Judul halaman yang tampil di tab browser -->
    <title>Data Tarif</title>

</head>

<body>

    <!-- Judul halaman -->
    <h2>Data Tarif</h2>
    <a href="tambah.tarif.php">
        <button>Tambah Tarif</button>
    </a>


    <!-- Membuat tabel -->
    <table border="1">

        <!-- Baris untuk judul kolom -->
        <tr>

            <th>ID Tarif</th>
            <th>Jenis Kendaraan</th>
            <th>Tarif Per Jam</th>
            <th>Aksi</th>
        </tr>


        <?php foreach ($data as $row) { ?>


            <!-- Membuat baris untuk data tarif -->
            <tr>

                <!-- Menampilkan ID Tarif -->
                <td><?= $row['id_tarif']; ?></td>

                <!-- Menampilkan Jenis Kendaraan -->
                <td><?= $row['jenis_kendaraan']; ?></td>

                <!-- Menampilkan Tarif Per Jam -->
                <td><?= $row['tarif_per_jam']; ?></td>

                
                    <td>

    <!-- Tombol untuk mengedit data -->
    <a href="edit.tarif.php?id_tarif=<?= $row['id_tarif']; ?>">
        Edit
    </a>

    |

    <!-- Tombol untuk menghapus data -->
    <a href="hapus.tarif.php?id_tarif=<?= $row['id_tarif']; ?>"
       onclick="return confirm('Yakin ingin menghapus data ini?')">
        Hapus
    </a>

</td>
                

                </td>

            </tr>


        <?php } ?>


    <!-- Menutup tabel -->
    </table>

</body>

</html>