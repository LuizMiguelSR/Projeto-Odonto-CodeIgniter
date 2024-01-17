<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // Recupere as credenciais do formulário
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Carregue o model de usuário
        $userModel = new UserModel();
        
        // Verifique se o usuário existe no banco de dados
        $user = $userModel->where('email', $email)->first();
        
        if ($user && password_verify($password, $user['password'])) {
            // Se as credenciais são válidas, crie a sessão de usuário
            $userData = [
                'user_id' => $user['id'],
                'username' => $user['name'],
                'email' => $user['email'],
                'role' => $user['role'],
                // Outras informações do usuário, se necessário
            ];
            
            session()->set($userData);
            $welcomeMessage = 'Bem-vindo, ' . $user['name'];
            return redirect()->to('/painel')->with('success', $welcomeMessage);
        } else {
            // Se as credenciais não são válidas, redirecione para a página de login com uma mensagem de erro
            return redirect()->to('/')->with('success', 'Credenciais inválidas. Tente novamente.');
        }
    }

    public function logout()
    {
        // Destrua a sessão de usuário ao fazer logout
        session()->destroy();

        return redirect()->to('/');
    }
}
