<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaDePostsController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('site/ListaDePosts', compact('posts'));
    } 
    
}