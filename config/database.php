<?php
$conn = new mysqli("localhost", "root", "", "pwd_akhir");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
