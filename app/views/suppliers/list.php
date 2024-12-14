<?php
// app/views/suppliers/list.php
require_once 'app/views/partials/header.php';

$suppliers = $supplierController->listSuppliers();
?>

<h1>Supplier List</h1>
<a href="/suppliers/create.php">Add New Supplier</a>
<table>
    <thead>
        <tr>
            <th>Supplier ID</th>
            <th>Name</th>
            <th>Contact Info</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($suppliers as $supplier): ?>
            <tr>
                <td><?php echo $supplier['supplier_id']; ?></td>
                <td><?php echo $supplier['name']; ?></td>
                <td><?php echo $supplier['contact_info']; ?></td>
                <td>
                    <a href="/suppliers/update.php?id=<?php echo $supplier['supplier_id']; ?>">Edit</a>
                    <a href="/suppliers/delete.php?id=<?php echo $supplier['supplier_id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once 'app/views/partials/footer.php'; ?>