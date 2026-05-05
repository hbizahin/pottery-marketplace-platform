<?php
// ============================================================
//  controllers/AuthController.php
//
//  FIXES APPLIED:
//  1. password_verify() now checks against $user['password_hash']
//     (was $user['password'] — column does not exist in DB)
//  2. $_SESSION['username'] = $user['username']
//     (was $_SESSION['user_name'] = $user['name'] — neither column exists)
//  3. register() now calls createUser() with 4 args (username, email, hash, role)
//     (was passing name/phone/address which don't exist in our Users table)
//  4. All redirect paths are correct relative to project root
// ============================================================

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

    // Called by: views/login.php form POST → index.php?controller=auth&action=login
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = trim($_POST['email']);
            $pass  = $_POST['password'];

            $user = $this->userModel->getUserByEmail($email);

            // FIX 1: check password_hash not password
            if ($user && password_verify($pass, $user['password_hash'])) {
                // FIX 2: use username not name, session key matches index.php
                $_SESSION['user_id']  = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role']     = $user['role'];

                header("Location: index.php");
                exit();
            } else {
                echo "<script>alert('Incorrect email or password.'); window.location.href='views/login.php';</script>";
            }
        } else {
            // GET request — just show the login page
            include __DIR__ . '/../views/login.php';
        }
    }

    // Called by: views/register.php form POST → index.php?controller=auth&action=register
    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // FIX 3: field name is 'username' matching the form input name
            $username = trim($_POST['username']);
            $email    = trim($_POST['email']);
            $role     = $_POST['role'];
            $pass     = $_POST['password'];

            if (empty($username) || empty($email) || empty($pass) || empty($role)) {
                echo "<script>alert('Please fill in all fields.'); window.location.href='views/register.php';</script>";
                exit();
            }

            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

            try {
                // FIX 3: createUser takes 4 args — username, email, hash, role
                if ($this->userModel->createUser($username, $email, $hashed_password, $role)) {
                    echo "<script>alert('Registration Successful! Please login.'); window.location.href='views/login.php';</script>";
                }
            } catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    echo "<script>alert('This email or username is already registered.'); window.location.href='views/register.php';</script>";
                } else {
                    echo "Error: " . $e->getMessage();
                }
            }
        } else {
            include __DIR__ . '/../views/register.php';
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header("Location: views/login.php");
        exit();
    }
}
?>