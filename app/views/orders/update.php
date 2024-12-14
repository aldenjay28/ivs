<?php
// app/views/orders/update.php
require_once 'app/views/partials/header.php';

$order = $orderController->getOrderById($_GET['id']);
?>

<h1>Update Order</h1>
<form action="/process/order_process.php?action=update&id=<?php echo $order['order_id']; ?>" method="POST">
    <label for="user_id">User   ID:</label>
    <input type="number" name="user_id" value="<?php echo $order['user_id']; ?>" required>
    
    <label for="product_id">Product ID:</label>
    <input type="number" name="product_id" value="<?php echo $order['product_id']; ?>" required>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" value="<?php echo $order['quantity']; ?>" required>
    
    <button type="submit">Update Order</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>