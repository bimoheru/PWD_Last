<?php
include '../config/database.php';
$error = "";

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 2; // customer

    $stmt = $conn->prepare(
        "INSERT INTO users (nama,email,password,id_role) VALUES (?,?,?,?)"
    );
    if ($stmt->bind_param("sssi", $nama, $email, $password, $role) && $stmt->execute()) {
        header("Location: login.php");
    } else {
        $error = "Registrasi gagal";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>

<div class="auth-card">
    <h2>Register</h2>
    
    <?php if ($error): ?>
        <div class="alert"><?= $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="nama" placeholder="Nama    " required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="register">Register</button>
    </form>

    <div class="auth-link">
        Sudah punya akun? <a href="login.php">Login</a>
    </div>
</div>

</body>
</html>
