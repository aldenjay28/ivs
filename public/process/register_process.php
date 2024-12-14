<?php
// register_process.php
require_once 'config/database.php';
require_once 'app/models/User.php';
require_once 'app/controllers/AuthController.php';

$userModel = new User($pdo);
$authController = new AuthController($userModel);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];

    if ($authController->register($username, $password, $full_name, $email)) {
        header("Location: /login.php"); // Redirect to login page after successful registration
    } else {
        echo "Registration failed. Please try again.";
    }
}
?>