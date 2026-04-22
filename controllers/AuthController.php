<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../config/DBconnect.php';
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private $userModel;

    public function __construct()
    {
        global $conn;
        $this->userModel = new User($conn);
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $user = $this->userModel->getUserByEmail($email);

            if ($user && password_verify($pass, $user['password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['role'] = $user['role'];
                // FIXED PATH:
                header("Location: index.php");
                exit();
            } else {
                // FIXED PATH:
                echo "<script>alert('Incorrect email or password.'); window.location.href='views/login.php';</script>";
            }
        }
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $pass = $_POST['password'];
            $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
            $address = isset($_POST['address']) ? $_POST['address'] : "";

            if (empty($name) || empty($email) || empty($pass)) {
                die("Please fill in all required fields.");
            }

            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            try {
                if ($this->userModel->createUser($name, $email, $hashed_password, $role, $phone, $address)) {
                    // FIXED PATH:
                    echo "<script>alert('Registration Successful!'); window.location.href='views/login.php';</script>";
                }
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    // FIXED PATH:
                    echo "<script>alert('Error: This email is already registered.'); window.location.href='views/register.php';</script>";
                } else {
                    echo "Error: " . $e->getMessage();
                }
            }
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        // FIXED PATH:
        header("Location: views/login.php");
        exit();
    }
}
?>