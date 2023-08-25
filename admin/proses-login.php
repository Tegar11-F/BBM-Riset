<?php
session_start();

include "../koneksi.php"; // Ini menginclude file yang berisi koneksi database dengan mysqli

// Jika username atau password tidak diisi
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    // Lemparkan ke halaman login
    header("location: login.php");
    exit();
} else {
    // Inisialisasi post
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevent SQL Injection dengan menggunakan prepared statement
    $query = "SELECT COUNT(*) FROM admin WHERE username=? AND password=?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    // Jika ada hasil dari query, maka login berhasil
    if ($count > 0) {
        // Set flag session sebagai tanda admin sudah login
        $_SESSION['admin'] = 1;

        // Lemparkan ke halaman admin
        header('location: admin.php');
        exit();
    } else {
        // Jika tidak ada hasil, lemparkan kembali ke halaman login
        header('location: login.php');
        exit();
    }
}
?>