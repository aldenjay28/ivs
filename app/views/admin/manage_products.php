<?php
// app/views/admin/manage_products.php
require_once 'app/views/partials/header.php';
?>

<div class="container">
    <h1>Manage Products</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Populate with product data -->
        </tbody>
    </table>
    <button onclick="location.href='add_product.php'">Add Product</button>
</div>

<?php require_once 'app/views/partials/footer.php'; ?>

<?php
// app/views/admin/manage_products.php
require_once 'app/middleware/RoleMiddleware.php';
checkRole('admin'); // Only allow access to admin users

require_once 'app/views/partials/header.php';
?>

<div class="container">
    <h1>Manage Products</h1>
    <!-- Admin-specific content here -->
</div>

<?php require_once 'app/views/partials/footer.php'; ?>