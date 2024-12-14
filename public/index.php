<?php
// index.php

require_once 'config/database.php';
require_once 'app/models/User.php';
require_once 'app/models/Product.php';
require_once 'app/models/Category.php';
require_once 'app/models/Supplier.php';
require_once 'app/models/Transaction.php';
require_once 'app/models/Order.php';
require_once 'app/models/ActivityLog.php';
require_once 'app/models/Notification.php';
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/CategoryController.php';
require_once 'app/controllers/SupplierController.php';
require_once 'app/controllers/TransactionController.php';
require_once 'app/controllers/OrderController.php';
require_once 'app/controllers/ActivityLogController.php';
require_once 'app/controllers/NotificationController.php';

// Instantiate models
$userModel = new User($pdo);
$productModel = new Product($pdo);
$categoryModel = new Category($pdo);
$supplierModel = new Supplier($pdo);
$transactionModel = new Transaction($pdo);
$orderModel = new Order($pdo);
$activityLogModel = new ActivityLog($pdo);
$notificationModel = new Notification($pdo);

// Instantiate controllers
$authController = new AuthController($userModel);
$activityLogController = new ActivityLogController($activityLogModel);
$notificationController = new NotificationController($notificationModel);
$productController = new ProductController($productModel, $activityLogController, $notificationController);
$categoryController = new CategoryController($categoryModel);
$supplierController = new SupplierController($supplierModel);
$transactionController = new TransactionController($transactionModel);
$orderController = new OrderController($orderModel);

// Simple routing logic
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestUri === '/login.php') {
    require 'app/views/login.php';
} elseif ($requestUri === '/register.php') {
    require 'app/views/register.php';
} elseif (strpos($requestUri, '/products') === 0) {
    // Handle product-related requests
    if ($requestMethod === 'GET') {
        if ($requestUri === '/products/list.php') {
            $products = $productController->listProducts();
            require 'app/views/products/list.php';
        } elseif (strpos($requestUri, '/products/update.php') === 0) {
            $product_id = $_GET['id'];
            $product = $productController->getProduct($product_id);
            require 'app/views/products/update.php';
        } else {
            require 'app/views/products/create.php';
        }
    } elseif ($requestMethod === 'POST') {
        if (strpos($requestUri, '/products/create.php') === 0) {
            $data = $_POST; // Get data from the form
            $user_id = $_SESSION['user_id']; // Assuming user ID is stored in session
            $result = $productController->createProduct($data, $user_id);
            // Handle result (e.g., redirect or show errors)
        } elseif (strpos($requestUri, '/products/update.php') === 0) {
            $product_id = $_GET['id'];
            $data = $_POST; // Get data from the form
            $user_id = $_SESSION['user_id'];
            $result = $productController->updateProduct($product_id, $data, $user_id);
            // Handle result
        } elseif (strpos($requestUri, '/products/delete.php') === 0) {
            $product_id = $_GET['id'];
            $user_id = $_SESSION['user_id'];
            $result = $productController->deleteProduct($product_id, $user_id);
            // Handle result
        }
    }
} elseif (strpos($requestUri, '/categories') === 0) {
    // Handle category-related requests (similar structure)
} elseif (strpos($requestUri, '/suppliers') === 0) {
    // Handle supplier-related requests (similar structure)
} elseif (strpos($requestUri, '/transactions') === 0) {
    // Handle transaction-related requests (similar structure)
} elseif (strpos($requestUri, '/orders') === 0) {
    // Handle order-related requests (similar structure)
} else {
    // Default to user dashboard or 404
    require 'app/views/user/dashboard.php';
}
?>