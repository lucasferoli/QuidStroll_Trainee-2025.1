<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LandingController
{

    public function index()
    {
       $posts = App::get('database')->selectAllOrderBy('posts', 'id', 'DESC', 0, 5);
return view('site/landingPage', compact('posts'));
    }
}