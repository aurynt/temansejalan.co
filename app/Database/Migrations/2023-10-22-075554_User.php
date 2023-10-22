<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'int',
                'auto_increment'=>true,
                'constraint'=>10
            ],
            'email'=>[
                'type'=>'varchar',
                'constraint'=>100,
                'null'=>false
            ],
            'password'=>[
                'type'=>'varchar',
                'null'=>false
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
