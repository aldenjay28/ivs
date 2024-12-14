<?php
// app/controllers/SupplierController.php

class SupplierController {
    private $supplierModel;

    public function __construct($supplierModel) {
        $this->supplierModel = $supplierModel;
    }

    public function createSupplier($data) {
        return $this->supplierModel->create($data['name'], $data['contact_info']);
    }

    public function getSupplier($supplier_id) {
        return $this->supplierModel->find($supplier_id);
    }

    public function updateSupplier($supplier_id, $data) {
        return $this->supplierModel->update($supplier_id, $data);
    }

    public function deleteSupplier($supplier_id) {
        return $this->supplierModel->delete($supplier_id);
    }

    public function listSuppliers() {
        return $this->supplierModel->getAll();
    }
}
?>