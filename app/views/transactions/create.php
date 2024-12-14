<?php
// app/views/transactions/create.php
require_once 'app/views/partials/header.php';
?>

<h1>Add New Transaction</h1>
<form action="/process/transaction_process.php?action=create" method="POST">
    <label for="product_id">Product ID:</label>
    <input type="number" name="product_id" required>
    
    <label for="user_id">User  ID:</label>
    <input type="number" name="user_id" required>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>
    
    <button type="submit">Add Transaction</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>