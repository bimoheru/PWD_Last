
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>U Komputer: Toko Komputer terlengkap di Cianjur</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/headfooter.css">
    <script src="script/script.js"></script>

</head>
<body>  

<header class="p-3 text-bg-dark">
  <div class="container-fluid">
    <div class="d-flex flex-wrap align-items-center justify-content-between">
      <a href="home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="img/logo.png" alt="Kembali ke Menu Utama" style="height:50px; width:auto;">
      </a>
      <ul class="nav col-lg-auto mb-2 justify-content-center mb-md-0">

        <li><a href="katalog/cpu.html" class="nav-link px-2 text-white">CPU</a></li>
        <li><a href="katalog/mobo.html" class="nav-link px-2 text-white">MOTHERBOARD</a></li>
        <li><a href="katalog/ram.html" class="nav-link px-2 text-white">RAM</a></li>
        <li><a href="katalog/gpu.html" class="nav-link px-2 text-white">GRAPHIC CARD</a></li>
        <li><a href="katalog/storage.html" class="nav-link px-2 text-white">STORAGE</a></li>
        <li><a href="katalog/Psu.html" class="nav-link px-2 text-white">PSU</a></li>
      </ul>
      <form class="d-flex align-items-center mb-3 mb-lg-0 me-lg-3" role="search" style="min-width:250px;">
        <input type="search" class="form-control form-control-dark me-2" placeholder="Search..." aria-label="Search">
        <a href="../auth/login.php" class="btn btn-outline-light me-2" role="button">Login</a>
        <a href="../auth/register.php" class="btn btn-primary signup" role="button">Register</a>
      </form>
    </div>
  </div>
</header>

<h1 >Welcome to U Komputer</h1>

<div class="carousel-container">
        <div class="carousel-slide" id="carouselSlide">
            <div class="slide-item">
              <img src="img/banneri9-14900K2.png" alt="carousel" style="height:1080px; width:1500px; object-fit:contain;">
            </div>
            <div class="slide-item">
              <img src="img/AMD-Ryzen-7-98003DX.jpg" alt="carousel" style="height:1080px; width:1500px; object-fit:contain;">
            </div>
            <div class="slide-item">
              <img src="img/msiz790-carousel.png" alt="carousel" style="height:1080px; width:1500px; object-fit:contain;">
            </div>
            <div class="slide-item">
              <img src="img/rogx870-carousel.png" alt="carousel" style="height:1080px; width:1500px; object-fit:contain;">
            </div>

        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>


<!-- kategori produk -->
<div class="container my-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold bg-danger text-white d-inline-block px-4 py-2 rounded">Cari Komponen PC</h2>
  </div>
  <div class="row justify-content-center">

    <!-- cpu -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/cpu.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/intelamd.png" alt="cpu" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>CPU</div>
      </a>
    </div>

    <!-- mobo -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/mobo.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/rogx870.png" alt="mobo" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>Motherboard</div>
      </a>
    </div>

    <!-- ram -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/ram.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/tridenddr5.png" alt="ram" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>RAM</div>
      </a>
    </div>

    <!-- gpu -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/gpu.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/gpu.png" alt="gpu" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>Graphic Card</div>
      </a>
    </div>

    <!-- storage -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/storage.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/ssdsamsung.png" alt="store" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>Storage</div>
      </a>
    </div>

    <!-- psu -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/psu.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/seasonic750w.png" alt="psu" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>Power Supply</div>
      </a>
    </div>

    <!-- Cooler -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/cooler.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/RK120.png" alt="cooler" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>CPU Cooler</div>
      </a>
    </div>

    <!-- Case -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/case.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/nzxth6.png" alt="Case" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>Casing</div>
      </a>
    </div>

    <!-- monitor -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/monitor.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/monitor.png" alt="monitor" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>Monitor</div>
      </a>
    </div>

    <!-- perip -->
    <div class="col-auto text-center mb-4">
      <a href="katalog/perip.html" class="text-decoration-none text-dark">
        <div class="border rounded p-2 mb-2 d-flex align-items-center justify-content-center" style="height:100px; width:100px; margin:auto;">
          <img src="img/keebmouse.png" alt="perip" style="height:64px; width:64px; object-fit:contain;">
        </div>
        <div>Peripheral</div>
      </a>
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
          <li><a href="contact.html" class="text-white">Hubungi Kami</a></li> 
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
