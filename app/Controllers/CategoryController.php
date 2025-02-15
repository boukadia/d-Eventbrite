<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Category;

use App\Models\AdminCategoryModel;

class CategoryController extends Controller

{
    public $categoryModel;
    public function __construct() {
        $this->model = new Category();
        $this->categoryModel = new AdminCategoryModel();
    }

    public function addCategory() {
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryName = $_POST['category_name'];
            $result = $this->categoryModel->addCategory($categoryName);
            echo json_encode($result);
        // }
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