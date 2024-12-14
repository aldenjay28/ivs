<?php
// app/views/suppliers/create.php
require_once 'app/views/partials/header.php';
?>

<h1>Add New Supplier</h1>
<form action="/process/supplier_process.php?action=create" method="POST">
    <label for="name">Supplier Name:</label>
    <input type="text" name="name" required>
    
    <label for="contact_info">Contact Info:</label>
    <textarea name="contact_info"></textarea>
    
    <button type="submit">Add Supplier</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>