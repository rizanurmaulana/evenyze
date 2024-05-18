<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistrationsTable extends Migration
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
            'event_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'unsigned'       => true,
            ],
            'registered_at' => [
                'type'           => 'DATETIME',
                'null'           => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('event_id', 'event', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('registrations');
    }

    public function down()
    {
        $this->forge->dropTable('registrations');
    }
}
