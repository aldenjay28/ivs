<?php
// app/controllers/AuthController.php

class AuthController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function login($username, $password) {
        $user = $this->userModel->authenticate($username, $password);
        if ($user) {
            // Start session and set user data
            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            return true; // Login successful
        }
        return false; // Authentication failed
    }

    public function register($username, $password, $full_name, $email) {
        return $this->userModel->create($username, $password, $full_name, $email);
    }

    public function logout() {
        session_start();
        session_destroy(); // Destroy the session
        header("Location: /login.php"); // Redirect to login page
        exit();
    }

    public function isAuthenticated() {
        session_start();
        return isset($_SESSION['user_id']);
    }

    public function getUserRole() {
        session_start();
        return $_SESSION['role'] ?? null;
    }
}
?>