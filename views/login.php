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
            <h1>Welcome Back</h1>
            <p class="tagline">SIGN IN TO YOUR STUDIO ACCOUNT</p>
            <form action="../index.php?controller=auth&action=login" method="POST" id="loginForm" novalidate>
                <div class="input-group">
                    <label>EMAIL ADDRESS</label>
                    <input type="email" name="email" id="loginEmail" placeholder="artisan@hearth.com">
                    <span class="error-msg" id="loginEmailError"></span>
                </div>

                <div class="input-group">
                    <label>PASSWORD</label>
                    <input type="password" name="password" id="loginPass" placeholder="••••••••">
                    <span class="error-msg" id="loginPassError"></span>
                </div>

                <button type="submit" class="btn-auth">LOGIN TO HEARTH</button>
            </form>
            <p class="switch-auth">DON'T HAVE AN ACCOUNT? <a href="register.php">SIGN UP</a></p>
        </div>
    </main>
    <script src="../script.js"></script>
</body>
</html>