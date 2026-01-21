<?php


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
