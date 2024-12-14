<?php // app/views/categories/update.php
require_once 'app/views/partials/header.php';

// Assuming $categoryController is already initialized somewhere before
$category = $categoryController->getCategoryById($_GET['id']); 
?> 

<h1>Update Category</h1>

<form action="/process/category_process.php?action=update&id=<?php echo htmlspecialchars($category['category_id'], ENT_QUOTES, 'UTF-8'); ?>" method="POST">
    <label for="category_name">Category Name:</label>
    <input type="text" name="category_name" value="<?php echo htmlspecialchars($category['category_name'], ENT_QUOTES, 'UTF-8'); ?>" required>

    <label for="description">Description:</label>
    <textarea name="description"><?php echo htmlspecialchars($category['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
  
    <button type="submit">Update Category</button>
</form>

<?php require_once 'app/views/partials/footer.php'; ?>
