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
            'titulo' => $_POST['titulo'],
            'descricao'=> $_POST['descricao'],
            'imagem' => $caminhoDaImagem,
            'id_autor' => $_POST['id_autor'],
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
        $id = $_POST['id'];
        $post = App::get('database')->selectOne('posts', $id);
        $caminhoDaImagem = $post->imagem;

        if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
        $temporario = $_FILES['imagem']['tmp_name'];

        $nomeImagem = sha1(uniqid($_FILES['imagem']['name'], true)) . "." . pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $destinoImagem = "public/assets/imagemPosts/";
        $caminhoDaImagem = $destinoImagem . $nomeImagem;
        move_uploaded_file($temporario, $caminhoDaImagem);

        if($post && !empty($post->imagem) && file_exists($post->imagem)){
            unlink($post->imagem);

        }

        }
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

    public function search(){
      $tituloBusca = $_GET['busca'] ?? '';

    if ($tituloBusca) {
        $posts = App::get('database')->selectWhereLike('posts', 'titulo', $tituloBusca);
    } else {
        $posts = App::get('database')->selectAll('posts');
    }

    return view('admin/tabelaDePosts', compact('posts'));
    header('Location: /tabeladeposts');
    }
}