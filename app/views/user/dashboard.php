<?php
// app/views/user/dashboard.php
require_once 'app/views/partials/header.php';

// Assuming you have the user ID in the session
$user_id = $_SESSION['user_id'];
$notifications = $notificationController->getUserNotifications($user_id);
?>

<div class="container">
    <h1>User Dashboard</h1>
    <p>Welcome to your dashboard!</p>

    <h2>Notifications</h2>
    <ul>
        <?php foreach ($notifications as $notification): ?>
            <li><?php echo $notification['message']; ?> (<?php echo $notification['created_at']; ?>)</li>
        <?php endforeach; ?>
    </ul>

    <p><a href="/products/list.php">Manage Products</a></p>
    <p><a href="/categories/list.php">Manage Categories</a></p>
    <p><a href="/suppliers/list.php">Manage Suppliers</a></p>
    <p><a href="/transactions/list.php">Manage Transactions</a></p>
    <p><a href="/orders/list.php">Manage Orders</a></p>
</div>

<?php require_once 'app/views/partials/footer.php'; ?>