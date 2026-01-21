<?php

include '../config/database.php';
include '../template/header.php';
include '../template/sidebar.php';

$counts = $conn->query("SELECT k.id_kategori, k.nama_kategori, COUNT(p.id_produk) AS jumlah FROM kategori k LEFT JOIN produk p ON p.id_kategori = k.id_kategori GROUP BY k.id_kategori ORDER BY jumlah DESC");
$totalRow = $conn->query("SELECT COUNT(*) AS total FROM kategori")->fetch_assoc();
$total = $totalRow ? $totalRow['total'] : 0;
?>

<section class="content pt-3">
  <div class="container-fluid">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Kategori</h3>
      </div>

      <div class="card-body">
        <p>Total kategori: <strong><?= $total; ?></strong></p>

        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Jumlah Produk</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; while($row=$counts->fetch_assoc()): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= htmlspecialchars($row['nama_kategori']); ?></td>
              <td><?= $row['jumlah']; ?></td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>

<?php include '../template/footer.php'; ?>
