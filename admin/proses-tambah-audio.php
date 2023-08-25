<?php
// Start session untuk admin
session_start();

// Mencegah akses halaman admin dari URL
// Jika admin belum login
if (!isset($_SESSION['admin'])) {
    // Lemparkan ke halaman login
    header('location: login.php');
    exit();
}

include "../koneksi.php";

$skt = $_POST['skt'];

// Jika file tidak kosong dan ukuran lebih dari 0 (user telah memasukkan file)
if (!empty($_FILES) && $_FILES["file"]["size"] > 0) {
    // Ambil nama file
    $file = $_FILES["file"]["name"];

    // Membuang ekstensi
    $file = explode(".", $file);

    // Ambil hanya nama file
    $file = $file[0];

    // Pindahkan ke folder suara
    $move = move_uploaded_file($_FILES["file"]["tmp_name"], "../audio/" . $file);

    // Insert ke database dengan menggunakan prepared statement untuk mencegah SQL injection
    $query = "INSERT INTO suku_kata (skt) VALUES (?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('s', $skt);
    $stmt->execute();
    $stmt->close();
}

header("location: tambah-audio.php");
exit();
?>