<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Activity extends Migration
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
            'author' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            'table' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('activity');
    }
    
    public function down()
    {
        $this->forge->dropTable('activity');
    }
}
