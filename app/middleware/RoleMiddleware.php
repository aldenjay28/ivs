<?php
// app/middleware/RoleMiddleware.php

function checkRole($requiredRole) {
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== $requiredRole) {
        header("Location: /403.php"); // Redirect to a forbidden access page
        exit();
    }
}
?>