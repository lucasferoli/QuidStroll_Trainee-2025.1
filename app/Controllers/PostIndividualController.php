<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostIndividualController
{

    public function index($id)
    {
        $post = App::get('database')->selectOne('posts', $id);
        return view('site/postIndividual', compact('post'));
    }


}