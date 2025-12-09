<?php

require_once 'register.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = new login();
    $login->login();


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="register-box">
        <img src="../assets/Logo-Laboratorium.png" alt="">

        <h1>Register</h1>

        <form method="POST" action="<? $_SERVER['PHP_SELF']; ?> ">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div>
                <label for="email">Your Email</label>
                <input type="text" name="email" placeholder="name@company.com" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit" name="submit">Sign up</button>

            <p>Already have an account? <a href="loginForm.php">Sign in</a></p>
        </form>
    </div>
</body>
</html>