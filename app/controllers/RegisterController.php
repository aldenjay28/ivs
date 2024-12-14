<?php
require '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = "user"; // Default role

    // Check if the username or email already exists
    $checkQuery = "SELECT * FROM users WHERE username = :username OR email = :email";
    $stmt = $pdo->prepare($checkQuery);
    $stmt->execute(['username' => $username, 'email' => $email]);

    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Existed Data'); window.location.href='../../public/register.php';</script>";
    } else {
        // Insert new user
        $query = "INSERT INTO users (full_name, username, email, password, role) VALUES (:full_name, :username, :email, :password, :role)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            'full_name' => $full_name,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);
        echo "<script>alert('Registered Successfully'); window.location.href='../../public/login.php';</script>";
    }
}
?>
