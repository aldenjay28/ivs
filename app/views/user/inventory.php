<?php
// app/views/user/inventory.php
require_once 'app/views/partials/header.php';
?>

<div class="container">
    <h1>Inventory</h1>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>SKU</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            <!-- Populate with inventory data -->
        </tbody>
    </table>
</div>

<?php require_once 'app/views/partials/footer.php'; ?>