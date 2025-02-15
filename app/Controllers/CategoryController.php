<?php

namespace App\Controllers;
use App\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct() {
        $this->model = new Category();
    }
}