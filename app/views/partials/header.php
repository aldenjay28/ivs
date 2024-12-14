<!-- app/views/partials/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?php echo $config['site_title']; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $config['site_title']; ?></h1>
        <nav>
            <ul>
                <li><a href="/user/dashboard.php">Dashboard</a></li>
                <li><a href="/user/inventory.php">Inventory</a></li>
                <li><a href="/admin/dashboard.php">Admin Dashboard</a></li>
                <li><a href="/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>