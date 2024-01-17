<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Administrador',
                'email' => 'admin@email.com',
                'role' => 'admin',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Luiz Miguel',
                'email' => 'luiz@email.com',
                'role' => 'user',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Adicione mais registros conforme necessário
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
