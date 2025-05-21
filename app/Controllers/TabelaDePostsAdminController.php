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
            //'id' => $_POST['id'],
            'titulo' => $_POST['titulo'],
            'descricao'=> $_POST['descricao'],
            'imagem' => $_POST['imagem'],
            //'criado_em' => $_POST['criado_em'],
            'id_autor' => 1
        ];
        
        App::get('database')->insert('posts', $parametros);
        header('Location: /admin/tabelaDePosts');
    }

    public function delete(){
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);
        header('Location: /TabelaDePosts');
    }
}