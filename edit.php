<?php
    include 'config.php';
    $id = $_GET['id'];
    $product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
        $harga = mysqli_real_escape_string($conn, intval($_POST['harga']));
        $stok = mysqli_real_escape_string($conn, intval($_POST['stok']));
        $conn->query("UPDATE products SET nama_produk='$nama_produk', harga='$harga', stok='$stok' WHERE id=$id");
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
    <h2>Edit Produk</h2>
    <form method="POST">
        <div class="mb-3 mt-3">
            <label for="nama_produk"> Nama Produk:</label>
            <input class="form-control" rows="1" id="nama_produk" name="nama_produk" value="<?= $product['nama_produk'] ?>" required></input>
        </div>
        <div class="mb-3 mt-3">
            <label for="harga"> Harga:</label>
            <input class="form-control" rows="1" id="harga" name="harga" value="<?= $product['harga'] ?>"required></input>
        </div>
        <div class="mb-3 mt-3">
            <label for="stok"> Stok:</label>
            <input class="form-control" rows="1" id="stok" name="stok" value="<?= $product['stok'] ?>"required></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</body>
</html>