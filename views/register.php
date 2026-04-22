<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Account - Artisan Hearth</title>
    <link rel="stylesheet" href="style.css">
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
            
            <!-- Added id="registrationForm" and novalidate -->
            <form action="register_handler.php" method="POST" id="registrationForm" novalidate>
                <div class="input-group">
                    <label>FULL NAME</label>
                    <input type="text" name="name" id="regName" placeholder="E.g. Julian Vases">
                    <span class="error-msg" id="nameError"></span>
                </div>

                <div class="input-group">
                    <label>EMAIL ADDRESS</label>
                    <input type="email" name="email" id="regEmail" placeholder="julian@hearth.com">
                    <span class="error-msg" id="emailError"></span>
                </div>

                <div class="input-group">
                    <label>I AM A...</label>
                    <select name="role" id="regRole">
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
                        <input type="password" name="password" id="password" placeholder="........">
                    </div>
                    <div class="input-group">
                        <label>CONFIRM PASSWORD</label>
                        <input type="password" id="confirmPassword" placeholder="........">
                    </div>
                </div>
                <!-- This span MUST have id="passError" -->
                <span class="error-msg" id="passError"></span>

                <button type="submit" class="btn-auth">SIGN UP</button>
            </form>
            <p class="switch-auth">Already part of our community? <a href="login.php">Login</a></p>
        </div>
    </main>
    <!-- Script link at the bottom -->
    <script src="script.js"></script>
</body>
</html>