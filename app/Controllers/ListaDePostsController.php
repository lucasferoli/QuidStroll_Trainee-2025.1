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
    


     public function search(){
      $tituloBusca = $_GET['busca'] ?? '';

    if ($tituloBusca) {
        $posts = App::get('database')->selectWhereLike('posts', 'titulo', $tituloBusca);
    } else {
        $posts = App::get('database')->selectAll('posts');
    }
    return view('site/ListaDePosts', compact('posts'));
    }

    public function clean(){
        header('Location: /lista');
    }
}