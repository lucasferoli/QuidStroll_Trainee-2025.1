<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class ListaDeUsuariosController {

    public function index() 
    {
        $usuarios = App::get('database')->selectALL('usuarios');

        return view('admin/ListaDeUsuarios', compact('usuarios'));
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

    public function edit()
    {
        $parametros = [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
        ];

        $id = $_POST['id'];

        App::get('database')->update('usuarios', $id, $parametros);
        
        header('Location: /ListaDeUsuarios');

    }

    public function delete(){

        $id = $_POST['id'];

        var_dump($id);

        App::get('database')->delete('usuarios', $id);
        
        header('Location: /ListaDeUsuarios');
    }

    public function paginate()
    {
        $page =1;
        if(isset($_GET['paginacaoNumero']) && !empty($_GET['paginacaoNumero'])) {
            $page = intval($_GET['paginacaoNumero']);

            if($page <= 0){
                return redirect('admin/ListaDeUsuarios');
            }
        }
        $itensPage = 5;
        $inicio = $itensPage * ($page - 1);
        $rows_count = App::get('database')->countAll('usuarios');

        if($inicio > $rows_count){
            return redirect('admin/ListaDeUsuarios');
        }

        $usuarios = App::get('database')->selectAll('usuarios', $inicio, $itensPage);
        $total_pages = ceil($rows_count / $itensPage);
        return view('admin/ListaDeUsuarios', compact('usuarios','page', 'total_pages'));
    }

}