<?php
// ============================================================
//  config/DBconnect.php
//  Database connection — used by ALL models and controllers
//  Change $password if your MySQL has a password set
// ============================================================

$host     = 'localhost';
$db       = 'pottery_marketplace';
$user     = 'root';
$password = '';            // leave empty if no password on localhost

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>