<?php
require_once __DIR__ . '/../models/CategoryModel.php';

class CategoryService {
    private $categoryModel;

    public function __construct($pdo) {
        $this->categoryModel = new CategoryModel($pdo);
    }

    public function getAllCategories() {
        return $this->categoryModel->getAllCategories();
    }

    public function getCategoryDetails($id) {
        return $this->categoryModel->getCategoryById($id);
    }

    public function addCategory($name) {
        return $this->categoryModel->createCategory($name);
    }

    public function updateCategory($id, $name) {
        return $this->categoryModel->updateCategory($id, $name);
    }

    public function removeCategory($id) {
        return $this->categoryModel->deleteCategory($id);
    }
}
