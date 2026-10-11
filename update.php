<?php
// 1. Memanggil koneksi ke database
include 'koneksi.php';

// 2. Mengambil ID buku yang akan diubah dari URL (contoh: edit.php?id=1)
$id = $_GET['id'];

// 3. Mengecek apakah tombol dengan name="update" ditekan pada form edit
if(isset($_POST['update'])){
    
    // 4. Mengambil data terbaru yang diinputkan/diubah pengguna di form
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun_terbit'];

    // 5. Menyimpan perubahan ke database menggunakan query UPDATE
    // JANGAN LUPA: Ganti buku_123 dengan nama tabel Anda (akhiran 3 digit NIM)
    $update = mysqli_query($conn, "UPDATE buku_123 SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun' WHERE id='$id'");
    
    // 6. Mengecek apakah proses update berhasil
    if($update){
        // Jika berhasil, alihkan (redirect) kembali ke halaman utama (index.php)
        header("Location: index.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal mengupdate data.";
    }
}
?>