<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account - Artisan Hearth</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body class="reg-page">
    <header class="navbar">
        <div class="logo">Artisan Hearth</div>
    </header>

    <main class="auth-container">
        <div class="auth-card">
            <p class="tagline">JOIN OUR HEARTH</p>
            <h1>Create Account</h1>

            <!--
                FIX 4: form action points to MVC router (index.php at root)
                FIX 3: input name changed from "name" to "username"
                        to match Users table column and AuthController
            -->
            <form action="../index.php?controller=auth&action=register" method="POST" id="registrationForm" novalidate>

                <div class="input-group">
                    <label>USERNAME</label>
                    <input type="text" name="username" id="regName" placeholder="E.g. julian_vases" required>
                    <span class="error-msg" id="nameError"></span>
                </div>

                <div class="input-group">
                    <label>EMAIL ADDRESS</label>
                    <input type="email" name="email" id="regEmail" placeholder="julian@hearth.com" required>
                    <span class="error-msg" id="emailError"></span>
                </div>

                <div class="input-group">
                    <label>I AM A...</label>
                    <select name="role" id="regRole" required>
                        <option value="">Select your role</option>
                        <option value="customer">Customer</option>
                        <option value="artist">Artist</option>
                        <option value="student">Student</option>
                    </select>
                    <span class="error-msg" id="roleError"></span>
                </div>

                <div class="flex-row">
                    <div class="input-group">
                        <label>PASSWORD</label>
                        <input type="password" name="password" id="password" placeholder="........" required>
                    </div>
                    <div class="input-group">
                        <label>CONFIRM PASSWORD</label>
                        <input type="password" id="confirmPassword" placeholder="........">
                    </div>
                </div>
                <span class="error-msg" id="passError"></span>

                <button type="submit" class="btn-auth">SIGN UP</button>
            </form>

            <p class="switch-auth">Already part of our community? <a href="login.php">Login</a></p>
        </div>
    </main>

    <script src="../script.js"></script>
</body>
</html>