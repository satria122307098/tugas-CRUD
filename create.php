<?php
    include 'config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
    $harga = mysqli_real_escape_string($conn, intval($_POST['harga']));
    $stok = mysqli_real_escape_string($conn, intval($_POST['stok']));
    $conn->query("INSERT INTO products (nama_produk, harga, stok) VALUES ('$nama_produk',
    '$harga', '$stok')");
    header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <h2>Tambah Produk</h2>
    <form method="POST">
        <div class="mb-3 mt-3">
            <label for="nama_produk"> Nama Produk:</label>
            <input class="form-control" rows="1" id="nama_produk" name="nama_produk" required></input>
        </div>
        <div class="mb-3 mt-3">
            <label for="harga"> Harga:</label>
            <input class="form-control" rows="1" id="harga" name="harga" required></input>
        </div>
        <div class="mb-3 mt-3">
            <label for="stok"> Stok:</label>
            <input class="form-control" rows="1" id="stok" name="stok" required></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</body>
</html>