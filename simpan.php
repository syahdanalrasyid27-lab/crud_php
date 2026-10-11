<?php
// 1. Memanggil koneksi ke database
include 'koneksi.php';

// 2. Mengecek apakah tombol dengan name="submit" (tombol Simpan) ditekan
if(isset($_POST['submit'])){
    
    // 3. Mengambil data yang diinputkan pengguna di dalam form
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun_terbit'];

    // 4. Menyimpan data ke database menggunakan query INSERT INTO
    // JANGAN LUPA: Ganti buku_123 dengan nama tabel Anda (akhiran 3 digit NIM)
    $insert = mysqli_query($conn, "INSERT INTO buku_123 (judul, penulis, tahun_terbit) VALUES ('$judul', '$penulis', '$tahun')");
    
    // 5. Mengecek apakah proses simpan berhasil
    if($insert){
        // Jika berhasil, alihkan (redirect) kembali ke halaman utama (index.php)
        header("Location: index.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal menambahkan data.";
    }
}
?>