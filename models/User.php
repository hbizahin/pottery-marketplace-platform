<?php
// ============================================================
//  models/User.php
//
//  FIXES APPLIED:
//  - All queries use correct column names from the database:
//    username, email, password_hash, role  (NOT name/password)
//  - createUser() inserts username + password_hash (no phone/address)
//  - getUserByEmail() returns password_hash for verification
// ============================================================

class User
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Used by AuthController login()
    public function getUserByEmail($email)
    {
        $sql  = "SELECT * FROM Users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Used by AuthController register()
    public function createUser($username, $email, $password_hash, $role)
    {
        $sql  = "INSERT INTO Users (username, email, password_hash, role) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $username, $email, $password_hash, $role);
        return $stmt->execute();
    }

    // Used by profile pages
    public function getUserById($user_id)
    {
        $sql  = "SELECT * FROM Users WHERE user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>