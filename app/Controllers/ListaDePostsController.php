<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaDePostsController
{

    public function index()
    {
        return view('site/listadeposts');
    }
}