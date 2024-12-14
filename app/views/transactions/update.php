<?php
// app/views/transactions/update.php
require_once 'app/views/partials/header.php';

$transaction = $transactionController->getTransactionById($_GET['id']);
?>

<h1>Update Transaction</h1>
<form action="/process/transaction_process.php?action=update&id=<?php echo $transaction['transaction_id']; ?>" method="POST">
    <label for="product_id">Product ID:</label>
    <input type="number" name="product_id" value="<?php echo $transaction['product_id']; ?>" required>
    
    <label for="user_id">User  ID:</label>
    <input type="number" name="user_id" value="<?php echo $transaction['user_id']; ?>" required>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" value="<?php echo $transaction['quantity']; ?>" required>
    
    <button type="submit">Update Transaction</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>