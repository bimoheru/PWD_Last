<?php

include '../config/database.php';
include '../template/header.php';
include '../template/sidebar.php';

$data = $conn->query("SELECT p.*, k.nama_kategori AS kategori FROM produk p LEFT JOIN kategori k ON p.id_kategori = k.id_kategori");
?>

<section class="content pt-3">
  <div class="container-fluid">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Produk</h3>
        <a href="tambah.php" class="btn btn-primary float-right">
          <i class="fas fa-plus"></i> Tambah 
        </a>
      </div>

      <div class="card-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; while($row=$data->fetch_assoc()): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $row['nama_produk']; ?></td>
              <td><?= htmlspecialchars($row['kategori'] ?? '-'); ?></td>
              <td><?= number_format($row['harga']); ?></td>
              <td><?= $row['stok']; ?></td>
              <td>
                <a href="edit.php?id=<?= $row['id_produk']; ?>" class="btn btn-warning btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="hapus.php?id=<?= $row['id_produk']; ?>" 
                   onclick="return confirm('Hapus data?')" 
                   class="btn btn-danger btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>

<?php include '../template/footer.php'; ?>