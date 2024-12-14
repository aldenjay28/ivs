<?php
// app/views/register.php
require_once 'app/views/partials/header.php';
?>

<div class="container">
    <h1>Register</h1>
    <form action="register_process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <button type="submit">Register</button>
    </form>
</div>

<?php require_once 'app/views/partials/footer.php'; ?>