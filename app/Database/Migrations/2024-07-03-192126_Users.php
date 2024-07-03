<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_profile' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'default' => 'dafault.svg',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at' => [
            'type' => 'TIMESTAMP',
            'null' => true, // atau hapus default untuk menghindari masalah
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => true, // atau hapus default untuk menghindari masalah
                'on update' => 'CURRENT_TIMESTAMP',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
        $this->forge->dropTable('users');
    }
}
