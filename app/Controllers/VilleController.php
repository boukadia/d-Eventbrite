<?php

namespace App\Controllers;

use App\Models\Villes;

class VilleController extends Controller
{

    public function __construct() {
        $this->model = new Villes();
    }

}