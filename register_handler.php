<?php
require_once('DBconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = $_POST['password'];

    // FIX FOR WARNINGS: 
    // If phone or address are not in the form, set them to an empty string
    $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
    $address = isset($_POST['address']) ? $_POST['address'] : "";

    // Basic validation
    if (empty($name) || empty($email) || empty($pass)) {
        die("Please fill in all required fields.");
    }
	

    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // FIX FOR FATAL ERROR:
    // We use a try-catch block to catch the "Duplicate Entry" error from MySQL
    try {
        $sql = "INSERT INTO users (name, email, password, role, phone, address) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email, $hashed_password, $role, $phone, $address);

        if ($stmt->execute()) {
            echo "<script>alert('Registration Successful!'); window.location.href='login.php';</script>";
        }
        $stmt->close();

    } catch (mysqli_sql_exception $e) {
        // Check if the error is "Duplicate entry" (Error code 1062)
        if ($e->getCode() == 1062) {
            echo "<script>alert('Error: This email is already registered. Please use a different email or Login.'); window.location.href='register.php';</script>";
        } else {
            // If it's a different error, show it
            echo "Error: " . $e->getMessage();
        }
    }

    $conn->close();
}
?>