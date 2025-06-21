<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostIndividualController
{

    public function index($id)
    {
        $post = App::get('database')->selectOne('posts', $id);
        $comentarios = App::get('database')->selectWhereLike('comentarios', 'id_post', $post->id);
        return view('site/postIndividual', compact('post', 'comentarios'));
    }

    public function store($id) {
        session_start();
        $parametros = [
            'conteudo' => $_POST['conteudo'],
            'id_post'=> $_POST['id_post'],
            'id_autor' => $_SESSION['id'],
        ];

  
        
        App::get('database')->insert('comentarios', $parametros);
        header("Location: /postIndividual/{$_POST['id_post']}");
    }

   public function delete($id) {
    App::get('database')->delete('comentarios', $id);
    header("Location: /postIndividual/{$_POST['id_post']}");
}
}