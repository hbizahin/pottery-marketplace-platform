<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config/DBconnect.php';
require_once __DIR__ . '/../models/Product.php';

class ProductController
{
    private $productModel;

    public function __construct()
    {
        global $conn;
        $this->productModel = new Product($conn);
    }

    // Handle the submission of a new product by an artist
    public function create()
    {
        // Security check: Only artists can add products
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'artist') {
            echo "<script>alert('Unauthorized access.'); window.location.href='index.php';</script>";
            exit();
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $stock = $_POST['stock'];
            $artist_id = $_SESSION['user_id'];
            
            // For now, we will use a default image. 
            // You can add file upload logic ($_FILES) here later!
            $image_path = "images/default_product.jpg"; 

            if ($this->productModel->addProduct($name, $description, $price, $stock, $image_path, $artist_id)) {
                echo "<script>alert('Product Added Successfully!'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('Failed to add product.'); window.location.href='index.php';</script>";
            }
        }
    }
}
?>