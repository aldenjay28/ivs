<?php
// app/views/products/update.php
require_once 'app/views/partials/header.php';

$product = $productController->getProductById($_GET['id']);
?>

<h1>Update Product</h1>
<form action="/process/product_process.php?action=update&id=<?php echo $product['product_id']; ?>" method="POST">
    <label for="product_name">Product Name:</label>
    <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>" required>
    
    <label for="sku">SKU:</label>
    <input type="text" name="sku" value="<?php echo $product['sku']; ?>" required>
    
    <label for="category_id">Category ID:</label>
    <input type="number" name="category_id" value="<?php echo $product['category_id']; ?>" required>
    
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>">
    
    <label for="cost_price">Cost Price:</label>
    <input type="text" name="cost_price" value="<?php echo $product['cost_price']; ?>" required>
    
    <label for="selling_price">Selling Price:</label>
    <input type="text" name="selling_price" value="<?php echo $product['selling_price']; ?>" required>
    
    <label for="description">Description:</label>
    <textarea name="description"><?php echo $product['description']; ?></textarea>
    
    <button type="submit">Update Product</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>