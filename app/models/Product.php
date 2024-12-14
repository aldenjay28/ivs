<?php
// app/models/Product.php

class Product {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($data) {
        $stmt = $this->pdo->prepare("INSERT INTO products (product_name, sku, category_id, quantity, cost_price, selling_price, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$data['product_name'], $data['sku'], $data['category_id'], $data['quantity'], $data['cost_price'], $data['selling_price'], $data['description']]);
    }

    public function find($product_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE product_id = ?");
        $stmt->execute([$product_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($product_id, $data) {
        $stmt = $this->pdo->prepare("UPDATE products SET product_name = ?, sku = ?, category_id = ?, quantity = ?, cost_price = ?, selling_price = ?, description = ? WHERE product_id = ?");
        return $stmt->execute([$data['product_name'], $data['sku'], $data['category_id'], $data['quantity'], $data['cost_price'], $data['selling_price'], $data['description'], $product_id]);
    }

    public function delete($product_id) {
        $stmt = $this->pdo->prepare("DELETE FROM products WHERE product_id = ?");
        return $stmt->execute([$product_id]);
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>