<?php

?>

<link rel="stylesheet" href="dashboard.css">

<div class="container-fluid">

    <div class="page-header">
        <h2>Tambah Produk</h2>
    </div>

    <div class="card-custom">
        <form method="POST" class="form-custom" enctype="multipart/form-data">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control" required>

            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>

            <label>Stok</label>
            <input type="number" name="stok" class="form-control" required>

            <label>Kategori</label>
            <select name="kategori" class="form-control" required>
                <?php
                $qk = $conn->query("SELECT * FROM kategori ORDER BY nama_kategori");
                if ($qk && $qk->num_rows > 0) {
                    while ($k = $qk->fetch_assoc()) {
                        echo '<option value="' . intval($k['id_kategori']) . '">' . htmlspecialchars($k['nama_kategori']) . '</option>';
                    }
                } else {
                    echo '<option value="0">(Tidak ada kategori)</option>';
                }
                ?>
            </select>

            <label>Gambar Max: 16 MB</label>
            <input type="file" name="gambar" accept="image/*" class="form-control" required>

            <button name="simpan" class="btn btn-custom">Simpan</button>
            <a href="produk.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</div>

<?php include '../template/footer.php'; ?>
