<?php

require_once 'models/Cart.php';
require_once 'models/Product.php';

class CartController
{
    private $cartModel;
    private $productModel;

    public function __construct()
    {
        $this->cartModel = new Cart();
        $this->productModel = new Product();
    }

    public function index()
    {
        $cartItems = $this->cartModel->getItems();
        $total = $this->cartModel->getTotal();

        include 'views/cart.php';
    }

    public function add()
    {
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $product = $this->productModel->getProductById($productId);

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
            $this->cartModel->removeItem($_GET['id']);
        }

        header('Location: index.php?controller=cart&action=index');
        exit;
    }

    public function update()
    {
        if (isset($_POST['id']) && isset($_POST['quantity'])) {
            $this->cartModel->updateQuantity($_POST['id'], (int)$_POST['quantity']);
        }

        header('Location: index.php?controller=cart&action=index');
        exit;
    }
}