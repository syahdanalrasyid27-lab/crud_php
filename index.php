<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Data Buku</title>
</head>
<body>
    <h2>Data Buku Perpustakaan</h2>
    <a href="tambah.php">+ Tambah Buku Baru</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php
        // JANGAN LUPA GANTI buku_123 DENGAN NIM ANDA
        $query = mysqli_query($conn, "SELECT * FROM buku_123");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['judul']; ?></td>
            <td><?php echo $data['penulis']; ?></td>
            <td><?php echo $data['tahun_terbit']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
                <a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>