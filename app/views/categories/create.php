<?php
// app/views/categories/create.php
require_once 'app/views/partials/header.php';
?>

<h1>Add New Category</h1>
<form action="/process/category_process.php?action=create" method="POST">
    <label for="category_name">Category Name:</label>
    <input type="text" name="category_name" required>
    
    <label for="description">Description:</label>
    <textarea name="description"></textarea>
    
    <button type="submit">Add Category</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>