<?php

namespace   App\Controllers;

use App\Models\UsersInscription;

class UsersInscriptionController extends Controller
{
    public function __construct(){
        $this->model = new UsersInscription();
    }
}