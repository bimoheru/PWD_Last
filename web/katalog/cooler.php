<?php
require_once __DIR__ . '/../../config/database.php';
$CATEGORY = 'COOLER';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>U Komputer: CPU Cooler</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/headfooter.css">
</head>
<body>
<header class="p-3 text-bg-dark">
  <div class="container-fluid">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <a href="../home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="../img/logo.png" alt="Kembali ke Menu Utama" style="height:50px; width:auto;">
      </a>
      <ul class="nav col-lg-auto mb-2 justify-content-center mb-md-0">

        <li><a href="cpu.php" class="nav-link px-2 text-white">CPU</a></li>
        <li><a href="mobo.php" class="nav-link px-2 text-white">MOTHERBOARD</a></li>
        <li><a href="ram.php" class="nav-link px-2 text-white">RAM</a></li>
        <li><a href="gpu.php" class="nav-link px-2 text-white">GRAPHIC CARD</a></li>
        <li><a href="storage.php" class="nav-link px-2 text-white">STORAGE</a></li>
        <li><a href="Psu.php" class="nav-link px-2 text-white">PSU</a></li>
      </ul>
      <form class="d-flex align-items-center mb-3 mb-lg-0 me-lg-3" role="search" style="min-width:250px;">
        <input type="search" class="form-control form-control-dark me-2" placeholder="Search..." aria-label="Search">
        <a href="../../auth/login.php" class="btn btn-outline-light me-2" role="button">Login</a> 
        <a href="../../auth/register.php"class="btn btn-primary signup" role="button">Register</a>
      </form>
    </div>
  </div>
</header>

<div class="container mt-4">
  <h3>CPU Cooler</h3>
  <div class="row g-3">
    <?php
    $sql = "SELECT p.*, k.nama_kategori AS kategori FROM produk p LEFT JOIN kategori k ON p.id_kategori = k.id_kategori WHERE k.nama_kategori = '" . $CATEGORY . "'";
    $res = $conn->query($sql);
    if ($res && $res->num_rows > 0) {
      while ($r = $res->fetch_assoc()) {
        $nama = htmlspecialchars($r['nama_produk']);
        $harga = isset($r['harga']) ? number_format($r['harga']) : '-';
        $img = isset($r['gambar']) && $r['gambar'] !== '' ? '../img/produk_img/' . $r['gambar'] : '../img/placeholder.png';
        echo '<div class="col-md-3"><div class="card h-100"><img src="'.$img.'" class="card-img-top"><div class="card-body"><h6>'.$nama.'</h6><p class="fw-bold">Rp '.$harga.'</p><button class="btn btn-danger w-100">Beli</button></div></div></div>';
      }
    } else {
      echo '<p>Tidak ada produk untuk kategori ini.</p>';
    }
    ?>
  </div>
</div>
</body>
</html>
