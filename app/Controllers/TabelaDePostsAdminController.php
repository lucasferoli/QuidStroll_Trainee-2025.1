<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class TabelaDePostsAdminController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('/admin/tabelaDePosts', compact('posts'));
    }

    public function store() {
        $parametros = [
            'id' => $_POST['id'],
            'tituloPost' => $_POST['tituloPost'],
            'conteudoPost'=> $_POST['conteudoPost'],
            'imagemPost' => $_POST['imagemPost'],
            'dataPost' => $_POST['dataPost'],
            'autorPost' => $_POST['autorPost'],
        ];
        
        App::get('database')->insert('posts', $parametros);
        header('Location: /tabelaDePosts');
    }

    public function delete(){
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);
        header('Location: /TabelaDePosts');
    }
}