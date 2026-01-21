<?php

?>

<link rel="stylesheet" href="../assets/css/dashboard.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="container-fluid">

    <div class="page-header mb-4">
        <h2>Dashboard</h2>
    </div>

    <div class="row">

        <!-- PRODUK -->
        <div class="col-md-3 col-sm-6">
            <div class="stat-box bg-blue">
                <h3><?= $produk['total']; ?></h3>
                <p>Produk</p>
                <div class="icon">
                    <i class="fas fa-box"></i>
                </div>
            </div>
        </div>

        <!-- KATEGORI -->
        <div class="col-md-3 col-sm-6">
            <div class="stat-box bg-green">
                <h3><?= $kategori['total']; ?></h3>
                <p>Kategori</p>
                <div class="icon">
                    <i class="fas fa-tags"></i>
                </div>
            </div>
        </div>

    </div>

</div>


<?php include '../template/footer.php'; ?>


    