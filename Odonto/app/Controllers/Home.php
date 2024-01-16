<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['titulo'] = 'Login';
        return view('home/index', $data);
    }

    public function recuperar(): string
    {
        $data['titulo'] = 'Recuperação de Senha';
        return view('home/recuperar', $data);
    }
}
