<?php
    include 'config.php';
    $result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas PWL Minggu 3 - CRUD PHP MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <h2>Daftar Produk</h2>
    <a href="create.php" class="btn btn-primary"><i class="bi bi-plus-lg"></i>Tambah Produk</a><br><br>
    <table class=" table table-hover table-bordered ">
        <tr class="table-primary">
            <th>ID</th><th>Nama Produk</th><th>Harga</th>
            <th>Stok</th><th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_produk'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-success"><i class="bi bi-pencil"> Edit</i></a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')" class="btn btn-danger"><i class="bi bi-trash"> Hapus</i></a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
