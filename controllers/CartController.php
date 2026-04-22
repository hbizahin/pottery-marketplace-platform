<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config/DBconnect.php';
require_once __DIR__ . '/../models/Cart.php';
require_once __DIR__ . '/../models/Product.php';

class CartController
{
    private $conn;
    private $cartModel;
    private $productModel;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
        $this->cartModel = new Cart();
        $this->productModel = new Product();
    }

    public function index()
    {
        $cartItems = $this->cartModel->getItems();
        $total = $this->cartModel->getTotal();

        include __DIR__ . '/../views/cart.php';
    }

    public function add()
    {
        if (isset($_GET['id'])) {
            $productId = (int) $_GET['id'];
            $product = null;

            if (method_exists($this->productModel, 'getProductById')) {
                $product = $this->productModel->getProductById($productId);
            }

            if (!$product) {
                $product = $this->getProductByIdFromDatabase($productId);
            }

            if ($product) {
                $this->cartModel->addItem($product);
            }
        }

        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    public function remove()
    {
        if (isset($_GET['id'])) {
            $productId = (int) $_GET['id'];
            $this->cartModel->removeItem($productId);
        }

        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['quantity'])) {
            $productId = (int) $_POST['id'];
            $quantity = max(0, (int) $_POST['quantity']);
            $this->cartModel->updateQuantity($productId, $quantity);
        }

        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    private function getProductByIdFromDatabase(int $productId)
    {
        $sql = "SELECT product_id AS id, name, price, image, stock_quantity FROM products WHERE product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $productId);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }
}
