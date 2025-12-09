

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="login-box">
        <img src="../assets/Logo-Laboratorium.png" alt="">

        <h1>Login</h1>
        <form method="POST">
            <div>
                <label for="email">Your Email</label>
                <input type="text" name="email" placeholder="name@company.com" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit">Sign in</button>

            <p class="signup">
                Don’t have an account yet?
                <a href="registerForm.php">Sign up</a>
            </p>
        </form>
    </div>
</body>
</html>