<?php
// app/views/products/list.php

$products = $productController->listProducts();
?>

<h1>Product List</h1>
<a href="create.php">Add New Product</a>
<table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Name</th>
            <th>SKU</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Cost Price</th>
            <th>Selling Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['product_id']; ?></td>
                <td><?php echo $product['product_name']; ?></td>
                <td><?php echo $product['sku']; ?></td>
                <td><?php echo $product['category_id']; ?></td>
                <td><?php echo $product['quantity']; ?></td>
                <td><?php echo $product['cost_price']; ?></td>
                <td><?php echo $product['selling_price']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $product['product_id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $product['product_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>