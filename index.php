<?php
session_start();

// Check if the user is actually logged in. 
// If they aren't, send them back to the login page.
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Artisan Hearth</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body style="background-color: #F9F7F2;">

    <header class="navbar">
        <div class="logo">Artisan Hearth</div>
        <nav>
            <span style="font-size: 14px; margin-right: 20px;">Welcome, <strong><?php echo $_SESSION['user_name']; ?></strong> (<?php echo $_SESSION['role']; ?>)</span>
            <a href="logout.php" style="color: #A65737; font-weight: 700; text-decoration: none; font-size: 14px;">LOGOUT</a>
        </nav>
    </header>

    <main style="text-align: center; padding: 100px 20px;">
        <h1 style="font-size: 48px; color: #6B2E1E;">Welcome to your Hearth</h1>
        <p style="color: #666; margin-top: 20px;">You have successfully logged into the Pottery Marketplace Platform.</p>
        
        <?php if ($_SESSION['role'] == 'artist'): ?>
            <div style="margin-top: 40px; padding: 20px; background: #FFF; display: inline-block; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                <h3>Artist Tools</h3>
                <p>Ready to showcase your work?</p>
                <button class="btn-auth" style="width: auto; padding: 10px 30px;">Add New Product</button>
            </div>
        <?php endif; ?>
    </main>

</body>
</html>