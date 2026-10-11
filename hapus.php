<?php
include 'koneksi.php';
$id = $_GET['id'];

// JANGAN LUPA GANTI buku_123 DENGAN NIM ANDA
$delete = mysqli_query($conn, "DELETE FROM buku_123 WHERE id='$id'");

if($delete){
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>