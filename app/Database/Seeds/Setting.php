<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Setting extends Seeder
{
    public function run()
    {
        $data = [
            'description' => 'Teman Sejalan.co adalah Kantin, kenapa kantin? Karena kita menyediakan jajanan yang ramah kantong yang berada di dalam komplek Sekolahan di Karanganyar. Selain itu, kita juga sebuah Tempat dimana kalian bisa bercanda sama teman, asik asikan bareng teman teman, sampe nugas di Teman Sejalan.co pun bisa. Apapun yang biasa kamu lakukan di Kantin sekolah, kita kemas semua kalian bisa lakukan juga di Teman Sejalan.co dengan konsep yang lebih modern. Itu dia kenapa tagline kita #nextlevelkantin',
            'instagram' => 'temansejalan.co',
            'facebook' => 'temansejalan.co',
            'whatsapp' => '+6285725082864',
            'email' => 'Kantin.temansejalan@gmail.com',
        ];
        $this->db->table('setting')->insert($data);
    }
}
