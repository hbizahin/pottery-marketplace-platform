<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Artisan Hearth</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body class="login-page">
    <header class="navbar">
        <div class="logo">Artisan Hearth</div>
    </header>

    <main class="auth-container">
        <div class="auth-card">
            <p class="tagline">WELCOME BACK</p>
            <h1>Login</h1>

            <!--
                FIX 4: form action points to MVC router (index.php at root)
                was pointing to login_handler.php which no longer exists
            -->
            <form action="../index.php?controller=auth&action=login" method="POST">

                <div class="input-group">
                    <label>EMAIL ADDRESS</label>
                    <input type="email" name="email" placeholder="julian@hearth.com" required>
                </div>

                <div class="input-group">
                    <label>PASSWORD</label>
                    <input type="password" name="password" placeholder="........" required>
                </div>

                <button type="submit" class="btn-auth">LOGIN</button>
            </form>

            <p class="switch-auth">New to Artisan Hearth? <a href="register.php">Create Account</a></p>
        </div>
    </main>
</body>
</html>