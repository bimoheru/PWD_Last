<?php

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
