<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostIndividualController
{

    public function index($id)
    {
        $post = App::get('database')->selectOne('posts', $id);
        $comentarios = App::get('database')->selectOne('comentarios', $id);
        return view('site/postIndividual', compact('post', 'comentarios'));
    }

    public function store($id) {
        $parametros = [
            'conteudo' => $_POST['conteudo'],
            'id_post'=> $_POST['id_post'],
            'id_autor' => 1,
        ];
        
        App::get('database')->insert('comentarios', $parametros);
        header('Location: /postIndividual/{$id}');
    }
}