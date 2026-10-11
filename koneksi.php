<?php
$host = "localhost";
$user = "root"; // Sesuaikan jika menggunakan user lain
$pass = ""; // Sesuaikan jika ada password
$db   = "perpustakaan_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>