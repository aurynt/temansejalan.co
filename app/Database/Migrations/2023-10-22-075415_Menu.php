<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'menu' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'author' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'slide' => [
                'type'       => 'SMALLINT',
                'constraint' => '1',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('menu');
    }

    public function down()
    {
        $this->forge->dropTable('menu');
    }
}
