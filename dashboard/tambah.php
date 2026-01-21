<?php
include '../config/database.php';
include '../template/header.php';
include '../template/sidebar.php';

if (isset($_POST['simpan'])) {
    $gambar = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] !== UPLOAD_ERR_NO_FILE) {
        $file = $_FILES['gambar'];
        if ($file['error'] === UPLOAD_ERR_OK) {
            $check = @getimagesize($file['tmp_name']);
            $allowed_mimes = ['image/jpeg', 'image/png', 'image/gif'];
            if ($check && in_array($check['mime'], $allowed_mimes, true)) {
                $uploadDir = __DIR__ . '/../web/img/produk_img';
                if (!is_dir($uploadDir)) {
                    @mkdir($uploadDir, 0755, true);
                }
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $filename = time() . '_' . bin2hex(random_bytes(6)) . '.' . $ext;
                $target = $uploadDir . DIRECTORY_SEPARATOR . $filename;
                if (@move_uploaded_file($file['tmp_name'], $target)) {
                    $gambar = $filename;
                }
            }
        }
    }

    $stmt = $conn->prepare("INSERT INTO produk (nama_produk, harga, stok, id_kategori, gambar) VALUES (?,?,?,?,?)");
    $stmt->bind_param("siiis", $_POST['nama'], $_POST['harga'], $_POST['stok'], $_POST['kategori'], $gambar);
    $stmt->execute();
    header("Location: produk.php");
}
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
