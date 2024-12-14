<?php
// app/views/transactions/list.php
require_once 'app/views/partials/header.php';

$transactions = $transactionController->listTransactions();
?>

<h1>Transaction List</h1>
<a href="/transactions/create.php">Add New Transaction</a>
<table>
    <thead>
        <tr>
            <th>Transaction ID</th>
            <th>Product ID</th>
            <th>User ID</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?php echo $transaction['transaction_id']; ?></td>
                <td><?php echo $transaction['product_id']; ?></td>
                <td><?php echo $transaction['user_id']; ?></td>
                <td ```php
                <td><?php echo $transaction['quantity']; ?></td>
                <td><?php echo $transaction['created_at']; ?></td>
                <td>
                    <a href="/transactions/update.php?id=<?php echo $transaction['transaction_id']; ?>">Edit</a>
                    <a href="/transactions/delete.php?id=<?php echo $transaction['transaction_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once 'app/views/partials/footer.php'; ?>