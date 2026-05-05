<?php
session_start();

// --- CENTRAL ROUTER ---
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controllerName = ucfirst($_GET['controller']) . 'Controller';
    $actionName = $_GET['action'];
    
    $controllerFile = 'controllers/' . $controllerName . '.php';
    if (file_exists($controllerFile)) {
        require_once $controllerFile;
        $controller = new $controllerName();
        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
            exit(); 
        }
    }
}

// Check if logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: views/login.php");
    exit();
}

// Fetch products for the homepage using the new Product Model
require_once 'config/DBconnect.php';
require_once 'models/Product.php';
$productModel = new Product($conn);
$allProducts = $productModel->getAllProducts();

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
            <!-- FIX 2: Changed $_SESSION['user_name'] to $_SESSION['username']
                 Make sure your AuthController sets: $_SESSION['username'] = $user['username']
                 using the exact column name from your Users table -->
            <span style="font-size: 14px; margin-right: 20px;">Welcome, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong> (<?php echo htmlspecialchars($_SESSION['role']); ?>)</span>
            <a href="index.php?controller=auth&action=logout" style="color: #A65737; font-weight: 700; text-decoration: none; font-size: 14px;">LOGOUT</a>
            <a href="index.php?controller=cart&action=index" style="color: #333; font-weight: 700; text-decoration: none; font-size: 14px; margin-left: 15px;">MY CART</a>
        </nav>
    </header>

    <main style="text-align: center; padding: 50px 20px;">
        <h1 style="font-size: 48px; color: #6B2E1E;">Welcome to your Hearth</h1>
        
        <?php if ($_SESSION['role'] == 'artist'): ?>
            <div style="margin-top: 20px; padding: 20px; background: #FFF; display: inline-block; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                <h3>Artist Tools</h3>
                <form action="index.php?controller=product&action=create" method="POST" style="margin-top: 15px; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                    <input type="text" name="name" placeholder="Product Name" required style="width: 200px;">
                    <input type="text" name="description" placeholder="Description" required style="width: 200px;">
                    <input type="number" name="price" placeholder="Price (৳)" required style="width: 100px;">
                    <input type="number" name="stock" placeholder="Stock Qty" required style="width: 100px;">
                    <button type="submit" class="btn-auth" style="width: auto; padding: 10px 30px; margin-top: 0;">Add Product</button>
                </form>
            </div>
        <?php endif; ?>

        <hr style="margin: 40px 0; border: 0; border-top: 1px solid #ddd;">

        <h2 style="color: #4A2C2A;">Marketplace Showcase</h2>
        
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; margin-top: 30px;">
            <?php if (!empty($allProducts)): ?>
                <?php foreach ($allProducts as $product): ?>
                    <div style="background: #fff; padding: 20px; border-radius: 10px; width: 250px; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
                        <!-- FIX 1: Changed $product['image'] to $product['image_url']
                             to match the actual column name in your Products table -->
                        <img src="<?= htmlspecialchars($product['image_url'] ?? 'images/default_product.jpg') ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">
                        <h3 style="margin: 15px 0 5px; color: #3d2b1f;"><?= htmlspecialchars($product['name']) ?></h3>
                        <p style="color: #666; font-size: 14px; margin-bottom: 15px;">৳<?= number_format($product['price'], 2) ?></p>
                        
                        <a href="index.php?controller=cart&action=add&id=<?= $product['product_id'] ?>" class="btn-auth" style="display: block; text-decoration: none; padding: 10px;">Add to Cart</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No products available in the marketplace yet.</p>
            <?php endif; ?>
        </div>
    </main>

</body>
</html>