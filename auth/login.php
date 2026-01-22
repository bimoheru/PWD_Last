<?php
session_start();
include '../config/database.php';

$error = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $user = $stmt->get_result()->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['role'] = $user['id_role'];

        // id_role == 1 itu admin
        if (isset($user['id_role']) && intval($user['id_role']) === 1) {
            header("Location: ../dashboard/index.php");
            exit;
        } else {
            header("Location: ../web/home.php");
            exit;
        }
    } else {
        $error = "Email atau password salah";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>

<div class="auth-card">
    <h2>Login</h2>

    <?php if ($error): ?>
        <div class="alert"><?= $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>

    <div class="auth-link">
        Belum punya akun? <a href="register.php">Register</a>
    </div>
</div>

</body>
</html>
