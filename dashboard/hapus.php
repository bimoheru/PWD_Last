<?php
session_start();
include '../config/database.php';

// Proteksi login
if (!isset($_SESSION['login'])) {
    header("Location: ../auth/login.php");
    exit;
}

// Ambil ID
if (!isset($_GET['id'])) {
    header("Location: produk.php");
    exit;
}

$id = $_GET['id'];

// Hapus data
$stmt = $conn->prepare("DELETE FROM produk WHERE id_produk=?");
$stmt->bind_param("i", $id);
$stmt->execute();

// Alert + redirect
echo "
<script>
    alert('Data produk berhasil dihapus!');
    window.location.href = 'produk.php';
</script>
";
