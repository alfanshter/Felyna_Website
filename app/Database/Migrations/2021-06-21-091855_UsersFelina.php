<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersFelina extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'role'       => [
				'type'           => 'INT',
				'constraint'     => '5',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]

		]);
		$this->forge->addPrimaryKey('username', true);
		$this->forge->createTable('users_felina');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users_felina');
	}
}
