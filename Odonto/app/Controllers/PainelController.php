<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PainelController extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Painel de Controle';
        return view('painel/index', $data);
    }
}
