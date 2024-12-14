<?php
// app/models/Supplier.php

class Supplier {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($name, $contact_info) {
        $stmt = $this->pdo->prepare("INSERT INTO suppliers (name, contact_info) VALUES (?, ?)");
        return $stmt->execute([$name, $contact_info]);
    }

    public function find($supplier_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM suppliers WHERE supplier_id = ?");
        $stmt->execute([$supplier_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($supplier_id, $data) {
        $stmt = $this->pdo->prepare("UPDATE suppliers SET name = ?, contact_info = ? WHERE supplier_id = ?");
        return $stmt->execute([$data['name'], $data['contact_info'], $supplier_id]);
    }

    public function delete($supplier_id) {
        $stmt = $this->pdo->prepare("DELETE FROM suppliers WHERE supplier_id = ?");
        return $stmt->execute([$supplier_id]);
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM suppliers");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>