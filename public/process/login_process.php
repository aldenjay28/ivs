<?php
// login_process.php
require_once 'config/database.php';
require_once 'app/models/User.php';
require_once 'app/controllers/AuthController.php';

$userModel = new User($pdo);
$authController = new AuthController($userModel);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($authController->login($username, $password)) {
        header("Location: /user/dashboard.php"); // Redirect to user dashboard
    } else {
        echo "Invalid username or password.";
    }
}
?>