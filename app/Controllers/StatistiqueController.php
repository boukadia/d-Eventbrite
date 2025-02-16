<?php

namespace   App\Controllers;

use App\Models\Statistique;

class StatistiqueController extends Controller
{
    public function __construct(){
        $this->model = new Statistique();
    }
}