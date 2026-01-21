<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto ">
    <li class="logout">
      <a href="../auth/logout.php" class="nav-link">
        <i class="fas fa-sign-out-alt" >Logout</i> 
      </a>
    </li>
  </ul>
</nav>

<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="../web/home.php" class="brand-link">
    <span class="brand-text font-weight-light">U Komputer</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="../dashboard/index.php" class="d-block"><?= $_SESSION['nama']; ?></a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column">
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="produk.php" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>Produk</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="kategori.php" class="nav-link">
            <i class="nav-icon fas fa-box"></i>
            <p>Kategori</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

<!-- Content Wrapper -->
<div class="content-wrapper">
