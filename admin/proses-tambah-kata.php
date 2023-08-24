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
?>

<?php
include "../koneksi.php";

$indo = $_POST['indo'];
$mdr = $_POST['mdr'];
$ket = $_POST['ket'];
$tingkatan = $_POST['tingkatan'];

// Prevent SQL Injection dengan menggunakan prepared statement
$query = "INSERT INTO kamus (indonesia, madura, keterangan, tingkatan) VALUES (?, ?, ?, ?)";
$stmt = $koneksi->prepare($query);
$stmt->bind_param('ssss', $indo, $mdr, $ket, $tingkatan);
$stmt->execute();
$stmt->close();

header("Location: tambah-kata.php");
exit();
?>