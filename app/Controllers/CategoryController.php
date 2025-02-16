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
     }

    public function addCategory() {
             $request = ['name' => $_POST['category_name']];
             parent::create($request);
    }

    public function deleteCategory() {
             $categoryId = $_POST['category_id'];
             $request = ['id' => $categoryId]; 
             parent::delete($categoryId);   
    }

    public function getAllCategories() {
         parent::getAll();
     }
}