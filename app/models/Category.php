<?php
// app/models/Category.php

class Category {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($category_name, $description) {
        $stmt = $this->pdo->prepare("INSERT INTO categories (category_name, description) VALUES (?, ?)");
        return $stmt->execute([$category_name, $description]);
    }

    public function find($category_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM categories WHERE category_id = ?");
        $stmt->execute([$category_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($category_id, $data) {
        $stmt = $this->pdo->prepare("UPDATE categories SET category_name = ?, description = ? WHERE category_id = ?");
        return $stmt->execute([$data['category_name '], $data['description'], $category_id]);
    }

    public function delete($category_id) {
        $stmt = $this->pdo->prepare("DELETE FROM categories WHERE category_id = ?");
        return $stmt->execute([$category_id]);
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM categories");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>