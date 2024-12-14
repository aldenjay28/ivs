<?php
// app/controllers/OrderController.php

class OrderController {
    private $orderModel;

    public function __construct($orderModel) {
        $this->orderModel = $orderModel;
    }

    public function createOrder($data) {
        return $this->orderModel->create($data['user_id'], $data['product_id'], $data['quantity']);
    }

    public function getOrder($order_id) {
        return $this->orderModel->find($order_id);
    }

    public function updateOrder($order_id, $data) {
        return $this->orderModel->update($order_id, $data);
    }

    public function deleteOrder($order_id) {
        return $this->orderModel->delete($order_id);
    }

    public function listOrders() {
        return $this->orderModel->getAll();
    }
}
?>