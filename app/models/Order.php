<?php
// app/models/Order.php

class Order {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($user_id, $product_id, $quantity) {
        $stmt = $this->pdo->prepare("INSERT INTO orders (user_id, product_id, quantity) VALUES (?, ?, ?)");
        return $stmt->execute([$user_id, $product_id, $quantity]);
    }

    public function find($order_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM orders WHERE order_id = ?");
        $stmt->execute([$order_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($order_id, $data) {
        $stmt = $this->pdo->prepare("UPDATE orders SET user_id = ?, product_id = ?, quantity = ? WHERE order_id = ?");
        return $stmt->execute([$data['user_id'], $data['product_id'], $data['quantity'], $order_id]);
    }

    public function delete($order_id) {
        $stmt = $this->pdo->prepare("DELETE FROM orders WHERE order_id = ?");
        return $stmt->execute([$order_id]);
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM orders");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>