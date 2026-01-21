<?php
include '../config/database.php';
include '../template/header.php';
include '../template/sidebar.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM produk WHERE id_produk=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $stmt = $conn->prepare(
        "UPDATE produk SET nama_produk=?, harga=?, stok=? WHERE id_produk=?"
    );
    $stmt->bind_param("siii", $_POST['nama'], $_POST['harga'], $_POST['stok'], $id);
    $stmt->execute();
    header("Location: produk.php");
}
?>

<link rel="stylesheet" href="../assets/css/dashboard.css">

<div class="container-fluid">

    <div class="page-header">
        <h2>Edit Produk</h2>
    </div>  

    <div class="card-custom">
        <form method="POST" class="form-custom">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control"
                   value="<?= $data['nama_produk']; ?>" required>

            <label>Harga</label>
            <input type="number" name="harga" class="form-control"
                   value="<?= $data['harga']; ?>" required>

            <label>Stok</label>
            <input type="number" name="stok" class="form-control"
                   value="<?= $data['stok']; ?>" required>

            <button name="update" class="btn btn-custom">Update</button>
            <a href="produk.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>

</div>

<?php include '../template/footer.php'; ?>
