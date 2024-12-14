<?php
// app/controllers/CategoryController.php

class CategoryController {
    private $categoryModel;

    public function __construct($categoryModel) {
        $this->categoryModel = $categoryModel;
    }

    public function createCategory($data) {
        return $this->categoryModel->create($data['category_name'], $data['description']);
    }

    public function getCategory($category_id) {
        return $this->categoryModel->find($category_id);
    }

    public function updateCategory($category_id, $data) {
        return $this->categoryModel->update($category_id, $data);
    }

    public function deleteCategory($category_id) {
        return $this->categoryModel->delete($category_id);
    }

    public function listCategories() {
        return $this->categoryModel->getAll();
    }
}
?>