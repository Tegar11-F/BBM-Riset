<?php
$host = "localhost";
$admin = "root";
$password = "";
$dbname = "kamus";

// Membuat koneksi menggunakan mysqli
$koneksi = new mysqli($host, $admin, $password, $dbname);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>