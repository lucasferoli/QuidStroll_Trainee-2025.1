<?php

namespace App\Controllers;

use App\Core\App;
use Exception;
use var_dump;
use App\core\database\Querybuilder;
class LandingController
{

    public function index()
    {
        $queryBuilder = new Querybuilder();
        $user = $queryBuilder->selectAll('usuarios');
        var_dump($user);
        return view('site/landingPage');
    }
}