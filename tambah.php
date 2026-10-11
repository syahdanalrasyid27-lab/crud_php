<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Buku</title>
</head>
<body>
    <h2>Tambah Data Buku Baru</h2>
    <form method="POST" action="">
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" required><br>
        <label>Penulis:</label><br>
        <input type="text" name="penulis" required><br>
        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" required><br><br>
        <button type="submit" name="submit">Simpan</button>
        <a href="index.php">Kembali</a>
    </form>

    <?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $tahun = $_POST['tahun_terbit'];

        // JANGAN LUPA GANTI buku_123 DENGAN NIM ANDA
        $insert = mysqli_query($conn, "INSERT INTO buku_123 (judul, penulis, tahun_terbit) VALUES ('$judul', '$penulis', '$tahun')");
        
        if($insert){
            header("Location: index.php");
        } else {
            echo "Gagal menambahkan data.";
        }
    }
    ?>
</body>
</html>