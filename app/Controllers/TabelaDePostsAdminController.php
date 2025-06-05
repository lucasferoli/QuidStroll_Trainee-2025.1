<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class TabelaDePostsAdminController
{

    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        return view('admin/tabelaDePosts', compact('posts'));  //Antes era '/admin/tabelaDePosts'
        
    }

    public function store() {

        $temporario = $_FILES['imagem']['tmp_name'];

        $nomeImagem = sha1(uniqid($_FILES['imagem']['name'], true)) . "." . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);

        $caminhoDaImagem = "public/assets/imagemPosts/" . $nomeImagem;

        move_uploaded_file($temporario, $caminhoDaImagem);


        $parametros = [
            //'id' => $_POST['id'],
            'titulo' => $_POST['titulo'],
            'descricao'=> $_POST['descricao'],
            'imagem' => $caminhoDaImagem,
            //'criado_em' => $_POST['criado_em'],
            'id_autor' => 1
        ];
        
        App::get('database')->insert('posts', $parametros);
        header('Location: /tabeladeposts');
    }

    public function delete(){

        $id = $_POST['id'];

        var_dump($id);

        App::get('database')->delete('posts', $id);
        
        header('Location: /tabeladeposts');
    }


    public function edit(){

        $parameters = [
            'titulo' => $_POST['titulo'],
            'descricao'=> $_POST['descricao'],
            'imagem' => $caminhoDaImagem,
            'id_autor' => 1,
            'criado_em' => $_POST['criado_em'],

        ];
        $id = $_POST['id'];
        App::get('database')->update('posts', $id, $parameters);
        header('Location: /tabeladeposts');

    }
}