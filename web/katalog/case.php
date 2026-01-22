<?php
require_once __DIR__ . '/../../config/database.php';
$CATEGORY = 'CASE';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U Komputer: Casing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
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

  <div class="container ">
        <div class="row">
          <!-- Grid card -->
           <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mb-auto">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Casing</li>
                </ol>
              </nav>
              <span>Produk Casing</span>
            </div>
            <div class="row g-3">

              <?php
              $sql = "SELECT p.*, k.nama_kategori AS kategori FROM produk p LEFT JOIN kategori k ON p.id_kategori = k.id_kategori WHERE k.nama_kategori = '" . $CATEGORY . "'";
              $result = $conn->query($sql);
              if ($result && $result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                      $nama = htmlspecialchars($row['nama_produk'] ?? 'Produk');
                      $harga = isset($row['harga']) ? number_format($row['harga']) : '-';
                      $img = isset($row['gambar']) && $row['gambar'] !== '' ? '../img/produk_img/' . $row['gambar'] : '../img/placeholder.png';
                      $link = isset($row['id_produk']) ? "../produk.php?id=" . intval($row['id_produk']) : '#';

                      echo '<div class="col-md-3">';
                      echo '<a href="' . $link . '" style="text-decoration:none; color:inherit;">';
                      echo '<div class="card h-100">';
                      echo '<img src="' . $img . '" class="card-img-top" alt="' . $nama . '">';
                      echo '<div class="card-body">';
                      echo '<h6 class="card-title">' . $nama . '</h6>';
                      echo '<p class="mb-1 fw-bold">Rp ' . $harga . '</p>';
                      echo '<button class="btn btn-danger w-100"><i class="bi bi-cart"></i> Beli</button>';
                      echo '</div></div></a></div>';
                  }
              } else {
                  echo '<p>Tidak ada produk untuk kategori ini.</p>';
              }
              ?>

            </div>
          </div>
        </div>
      </div>
</body>
</html>
<footer 
class="bg-danger text-white position-absolute bottom-0 w-100 py-4">
  <div class="container mt-auto">
    <div class="row gy-2">
      <div class="col-md-4  ">
        <h4 class="fw-bold text-white mb-3">U Komputer</h4>
          <p class="footer-desc">
            Toko elektronik terpercaya untuk kebutuhan PerKomputeran Anda
          </p>
        <p class="mb-1"><i class="bi bi-geo-alt"></i> <strong>U Komputer Cianjur</strong><br>
          <span>
            <span class="ms-4">Jl. Pasirgede Raya, Bojongherang</span><br>
            <span class="fw-normal ms-4">Cianjur, Jawa Barat 43216</span><br>
          </span>
        <p class="mb-1 d-flex align-items-start">
          <p class="mb-1"><i class="bi bi-clock"></i> <strong>Operasional</strong> </p>
          <span>
            <span class="fw-normal ms-4">Senin - Sabtu</span><br>
            <span class="ms-4">09:00 – 18:30 WIB</span><br>
            <span class="fw-normal ms-4">Minggu</span><br>
            <span class="ms-4">09:00 – 16:30 WIB</span>
          </span>
        </p>
      </div>
      <div class="col-md-3">
        <h5 class="fw-bold mb-3">Akun dan Kontak</h5>
        <ul class="list-unstyled mb-3">
          <li>Masuk / Daftar</li>
          <li><a href="../contact.html" class="text-white">Hubungi Kami</a></li> 
          <li>Lokasi Toko</li>
        </ul>
        <h6 class="fw-bold mb-2">Layanan UKomp Care</h6>
        <ul class="list-unstyled">
          <li>Register Service Warranty Ext</li>
          <li>Reservasi Perbaikan</li>
          <li>Reservasi Pengambilan Service</li>
        </ul>
      </div>
      
      <div class="col-md-3">
        <h5 class="fw-bold mb-3"> </h5>
        <div class="mb-3">
          <p class="footer-contact"><i class="bi bi-telephone-fill me-2"></i>0812–6946–4550</p>
          <p class="footer-contact"><i class="bi bi-envelope-fill me-2"></i>info@ukomp.id</p>
        </div>
      </div>
    </div>
    <hr class="border-light">
      <div class="text-center small footer-copy">
        © 2025 U Komputer. All rights reserved.
      </div>
  </div>
</footer>

<div class="d-flex justify-content-center gap-4">
</div>
