<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Experience extends Migration
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
            'description' => [
                'type' => 'TEXT',
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('experience');
    }

    public function down()
    {
        $this->forge->createTable('experience');
    }
}
