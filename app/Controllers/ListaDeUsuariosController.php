<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaDeUsuariosController {

    public function index() 
    {
        $usuarios = App::get('database')->selectALL('usuarios');

        return view('admin\ListaDeUsuarios', compact('usuarios'));
    }

    public function store()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];

        App::get('database')->insert('usuarios', $parametros);

        header('Location: /ListaDeUsuarios');

    }

}