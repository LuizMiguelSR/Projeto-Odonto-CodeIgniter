<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class PainelController extends BaseController
{
    public function index()
    {
        if (!session()->has('user_id')) {
            return redirect()->to('/')->with('success', 'Acesso não autorizado');
        } else {
            $usuariosModel = new UserModel();
            $data = [
                'usuarios' => $usuariosModel->paginate(1), // Defina o número de registros por página
                'pager'    => $usuariosModel->pager,
                'titulo'   => 'Painel de Controle',
            ];
            /* var_dump($data);
            exit; */
            return view('painel/index', $data);
        }
    }
}
    