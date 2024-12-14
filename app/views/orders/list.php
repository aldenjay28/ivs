<?php
// app/views/orders/list.php
require_once 'app/views/partials/header.php';

$orders = $orderController->listOrders();
?>

<h1>Order List</h1>
<a href="/orders/create.php">Add New Order</a>
<table>
    <thead>
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo $order['order_id']; ?></td>
                <td><?php echo $order['user_id']; ?></td>
                <td><?php echo $order['product_id']; ?></td>
                <td><?php echo $order['quantity']; ?></td>
                <td><?php echo $order['created_at']; ?></td>
                <td>
                    <a href="/orders/update.php?id=<?php echo $order['order_id']; ?>">Edit</a>
                    <a href="/orders/delete.php?id=<?php echo $order['order_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once 'app/views/partials/footer.php'; ?>