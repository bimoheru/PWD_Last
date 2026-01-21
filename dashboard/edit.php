<?php

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
