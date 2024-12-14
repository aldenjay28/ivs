<?php
// app/models/Transaction.php

class Transaction {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($product_id, $user_id, $quantity) {
        $stmt = $this->pdo->prepare("INSERT INTO transactions (product_id, user_id, quantity) VALUES (?, ?, ?)");
        return $stmt->execute([$product_id, $user_id, $quantity]);
    }

    public function find($transaction_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM transactions WHERE transaction_id = ?");
        $stmt->execute([$transaction_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($transaction_id, $data) {
        $stmt = $this->pdo->prepare("UPDATE transactions SET product_id = ?, user_id = ?, quantity = ? WHERE transaction_id = ?");
        return $stmt->execute([$data['product_id'], $data['user_id'], $data['quantity'], $transaction_id]);
    }

    public function delete($transaction_id) {
        $stmt = $this->pdo->prepare("DELETE FROM transactions WHERE transaction_id = ?");
        return $stmt->execute([$transaction_id]);
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM transactions");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>