<?php
include 'koneksi.php';
$id = $_GET['id'];
// JANGAN LUPA GANTI buku_123 DENGAN NIM ANDA
$query = mysqli_query($conn, "SELECT * FROM buku_123 WHERE id='$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['update'])){
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun_terbit'];

    // JANGAN LUPA GANTI buku_123 DENGAN NIM ANDA
    $update = mysqli_query($conn, "UPDATE buku_123 SET judul='$judul', penulis='$penulis', tahun_terbit='$tahun' WHERE id='$id'");
    
    if($update){
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Buku</title>
</head>
<body>
    <h2>Edit Data Buku</h2>
    <form method="POST" action="">
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" value="<?php echo $data['judul']; ?>" required><br>
        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?php echo $data['penulis']; ?>" required><br>
        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>" required><br><br>
        <button type="submit" name="update">Update</button>
        <a href="index.php">Kembali</a>
    </form>
</body>
</html>