<?php
// app/views/login.php
require_once 'app/views/partials/header.php';
?>

<div class="container">
    <h1>Login</h1>
    <form action="login_process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</div>

<?php require_once 'app/views/partials/footer.php'; ?>