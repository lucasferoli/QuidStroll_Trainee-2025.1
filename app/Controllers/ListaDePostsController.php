<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaDePostsController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('lista', compact('posts'));
    } 
    public function paginate()
    {
        $page =1;
        if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
            $page = intval($_GET['paginacaoNumero']);

            if($page <= 0){
                return redirect('lista');
            }
        }
        $itensPage = 6;
        $inicio = $itensPage * ($page - 1);
        $rows_count = App::get('database')->countAll('posts');

        if($inicio > $rows_count){
            return redirect('lista');
        }

        $posts = App::get('database')->selectAll('posts', $inicio, $itensPage);
        $total_pages = ceil($rows_count / $itensPage);
        return view('site/ListaDePosts', compact('posts','page', 'total_pages'));
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