<?php
// app/controllers/TransactionController.php

class TransactionController {
    private $transactionModel;

    public function __construct($transactionModel) {
        $this->transactionModel = $transactionModel;
    }

    public function createTransaction($data) {
        return $this->transactionModel->create($data['product_id'], $data['user_id'], $data['quantity']);
    }

    public function getTransaction($transaction_id) {
        return $this->transactionModel->find($transaction_id);
    }

    public function updateTransaction($transaction_id, $data) {
        return $this->transactionModel->update($transaction_id, $data);
    }

    public function deleteTransaction($transaction_id) {
        return $this->transactionModel->delete($transaction_id);
    }

    public function listTransactions() {
        return $this->transactionModel->getAll();
    }
}
?>