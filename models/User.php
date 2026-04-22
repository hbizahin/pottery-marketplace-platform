<?php

class User
{
    private $conn;

    // Constructor requires the database connection to be passed in
    public function __construct($dbConnection)
    {
        $this->conn = $dbConnection;
    }

    /**
     * Fetch a user by their email address for login verification.
     * Replaces the SELECT logic from login_handler.php
     */
    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $stmt->close();
            return $user;
        }
        
        $stmt->close();
        return false;
    }

    /**
     * Insert a new user into the database.
     * Replaces the INSERT logic from register_handler.php
     */
    public function createUser($name, $email, $hashed_password, $role, $phone, $address)
    {
        try {
            $sql = "INSERT INTO users (name, email, password, role, phone, address) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssssss", $name, $email, $hashed_password, $role, $phone, $address);
            
            $success = $stmt->execute();
            $stmt->close();
            
            return $success;
            
        } catch (mysqli_sql_exception $e) {
            // We throw the exception back to the Controller so it can check for the 1062 duplicate error code
            throw $e;
        }
    }
}
?>