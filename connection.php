<?php

// Memulai session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Data koneksi database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "xiirpl1_mutiara_ferisca_paket2";

// Membuat koneksi menggunakan MySQLi OOP
$koneksi = new mysqli($host, $user, $pass, $db);

// Mengecek apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

?>