<?php

class Product
{
    private $conn;

    // We allow passing the connection, but default to the global one if not provided
    // This ensures your existing CartController doesn't break!
    public function __construct($dbConnection = null)
    {
        if ($dbConnection === null) {
            global $conn;
            $this->conn = $conn;
        } else {
            $this->conn = $dbConnection;
        }
    }

    // Fetch all products to display on the homepage
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products ORDER BY product_id DESC";
        $result = $this->conn->query($sql);
        
        $products = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }

    // Fetch a single product by its ID (Used by CartController)
    public function getProductById($id)
    {
        $sql = "SELECT product_id AS id, name, price, image, stock_quantity FROM products WHERE product_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $product = $result->fetch_assoc();
            $stmt->close();
            return $product;
        }
        
        $stmt->close();
        return null;
    }

    // Insert a new product into the database
    public function addProduct($name, $description, $price, $stock, $image_path, $artist_id)
    {
        $sql = "INSERT INTO products (name, description, price, stock_quantity, image, artist_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdisi", $name, $description, $price, $stock, $image_path, $artist_id);
        
        $success = $stmt->execute();
        $stmt->close();
        
        return $success;
    }
}
?>