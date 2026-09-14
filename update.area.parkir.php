<?php

include 'connection.php';

$id_area = $_POST['id_area'];
$nama_area = $_POST['nama_area'];
$kapasitas = $_POST['kapasitas'];
$terisi = $_POST['terisi'];

$sql = "UPDATE tb_area_parkir SET
        nama_area = '$nama_area',
        kapasitas = '$kapasitas',
        terisi = '$terisi'
        WHERE id_area = '$id_area'";

if ($koneksi->query($sql)) {
    header("Location: tampil.area.parkir.php");
    exit;
} else {
    echo "Data gagal diubah: " . $koneksi->error;
}

?>