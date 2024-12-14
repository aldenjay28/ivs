<?php
// app/views/orders/create.php
require_once 'app/views/partials/header.php';
?>

<h1>Add New Order</h1>
<form action="/process/order_process.php?action=create" method="POST">
    <label for="user_id">User  ID:</label>
    <input type="number" name="user_id" required>
    
    <label for="product_id">Product ID:</label>
    <input type="number" name="product_id" required>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>
    
    <button type="submit">Add Order</button >
</form>

<?php require_once 'app/views/partials/footer.php'; ?>