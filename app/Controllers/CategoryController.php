<?php

namespace App\Controllers;

use App\Models\AdminCategoryModel;

class CategoryController{
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new AdminCategoryModel();
    }

    public function addCategory() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryName = $_POST['category_name'];
            $result = $this->categoryModel->addCategory($categoryName);
            echo json_encode($result);
        }
    }

    public function deleteCategory() {
             $categoryId = $_POST['category_id'];
            $result = $this->categoryModel->deleteCategory($categoryId);
            echo json_encode($result);
     
    }

    public function getAllCategories() {
        $categories = $this->categoryModel->getAllCategories();
        echo json_encode($categories);
    }
}