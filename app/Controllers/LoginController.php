<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class LoginController
{

    public function index()
    {
        session_start();
        if(isset($_SESSION['id']))
        {
            header('Location: /dashboard');
        }
        return view('site/login');
    }

    public function login(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = App::get('database')->verificaLogin($email, $senha);

        if($user != false){
            session_start();
            $_SESSION['id'] = $user->id;
            header('Location: /dashboard');
        }

        else{
            session_start();
            $_SESSION['mensagem-erro'] = "Usuário e/ou Senha incorretos!";
            header('Location: /login');

        }

    }
}