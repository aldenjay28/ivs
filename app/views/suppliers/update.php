<?php
// app/views/suppliers/update.php
require_once 'app/views/partials/header.php';

$supplier = $supplierController->getSupplierById($_GET['id']);
?>

<h1>Update Supplier</h1>
<form action="/process/supplier_process.php?action=update&id=<?php echo $supplier['supplier_id']; ?>" method="POST">
    <label for="name">Supplier Name:</label>
    <input type="text" name="name" value="<?php echo $supplier['name']; ?>" required>
    
    <label for="contact_info">Contact Info:</label>
    <textarea name="contact_info"><?php echo $supplier['contact_info']; ?></textarea>
    
    <button type="submit">Update Supplier</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>