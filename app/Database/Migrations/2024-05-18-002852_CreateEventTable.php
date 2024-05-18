<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEventTable extends Migration
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
            'nama_event' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'waktu' => [
                'type' => 'TIME',
            ],
            'harga_tiket' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'kuota' => [
                'type' => 'INT',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'gambar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'location_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('location_id', 'location', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('event');
    }

    public function down()
    {
        $this->forge->dropTable('event');
    }
}
