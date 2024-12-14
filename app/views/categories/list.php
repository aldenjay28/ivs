<?php
// app/views/categories/list.php
require_once 'app/views/partials/header.php';

$categories = $categoryController->listCategories();
?>

<h1>Category List</h1>
<a href="/categories/create.php">Add New Category</a>
<table>
    <thead>
        <tr>
            <th>Category ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?php echo $category['category_id']; ?></td>
                <td><?php echo $category['category_name']; ?></td>
                <td><?php echo $category['description']; ?></td>
                <td>
                    <a href="/categories/update.php?id=<?php echo $category['category_id']; ?>">Edit</a>
                    <a href="/categories/delete.php?id=<?php echo $category['category_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once 'app/views/partials/footer.php'; ?>