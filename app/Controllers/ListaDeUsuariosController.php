<?php

namespace app\Controllers;

use App\Core\App;
use Exception;

class ListaDeUsuariosController {

    public function index() 
    {
        #$usuarios = App::get('database')->selectALL('usuarios');

        return view('admin/ListaDeUsuarios');
    }

}