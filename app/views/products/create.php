<?php
// app/views/products/create.php
?>

<h1>Add New Product</h1>
<form action="store.php" method="POST">
    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" required>
    
    <label for="sku">SKU:</label>
    <input type="text" name="sku" required>
    
    <label for="category_id">Category ID:</label>
    <input type="number" name="category_id" required>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" value="0">
    
    <label for="cost_price">Cost Price:</label>
    <input type="text" name="cost_price" required>
    
    <label for="selling_price">Selling Price:</label>
    <input type="text" name="selling_price" required>
    
    <label for="description">Description:</label>
    <textarea name="description"></textarea>
    
    <button type="submit">Add Product</button>
</form>