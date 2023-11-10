<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data=[
            'name'=>'root',
            'email'=>'Kantin.temansejalan@gmail.com',
            'password'=>password_hash('admintemansejalan',PASSWORD_BCRYPT),
        ];
        $this->db->table('user')->insert($data);
    }
}
