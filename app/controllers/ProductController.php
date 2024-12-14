<?php
// app/controllers/ProductController.php

require_once 'app/models/ActivityLog.php';
require_once 'app/models/Notification.php';
require_once 'app/controllers/ActivityLogController.php';
require_once 'app/controllers/NotificationController.php';
require_once 'app/validation/ProductValidation.php';

class ProductController {
    private $productModel;
    private $activityLogController;
    private $notificationController;

    public function __construct($productModel, $activityLogController, $notificationController) {
        $this->productModel = $productModel;
        $this->activityLogController = $activityLogController;
        $this->notificationController = $notificationController;
    }

    public function createProduct($data, $user_id) {
        // Validate product data
        $errors = ProductValidation::validate($data);
        if (!empty($errors)) {
            return ['errors' => $errors];
        }

        // Log the action
        $this->activityLogController->logUserAction($user_id, 'Created a new product: ' . $data['product_name']);

        // Notify the user
        $this->notificationController->createNotification($user_id, 'You have successfully created a new product: ' . $data['product_name']);

        // Create the product
        return $this->productModel->create($data);
    }

    public function getProduct($product_id) {
        return $this->productModel->find($product_id);
    }

    public function updateProduct($product_id, $data, $user_id) {
        // Validate product data
        $errors = ProductValidation::validate($data);
        if (!empty($errors)) {
            return ['errors' => $errors];
        }

        // Log the action
        $this->activityLogController->logUserAction($user_id, 'Updated product ID: ' . $product_id);

        // Notify the user
        $this->notificationController->createNotification($user_id, 'You have successfully updated the product ID: ' . $product_id);

        // Update the product
        return $this->productModel->update($product_id, $data);
    }

    public function deleteProduct($product_id, $user_id) {
        // Log the action
        $this->activityLogController->logUserAction($user_id, 'Deleted product ID: ' . $product_id);

        // Notify the user
        $this->notificationController->createNotification($user_id, 'You have successfully deleted the product ID: ' . $product_id);

        // Delete the product
        return $this->productModel->delete($product_id);
    }

    public function listProducts() {
        return $this->productModel->getAll();
    }
}
?>