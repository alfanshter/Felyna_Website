<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true
			],

			'first_name' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],

			'last_name' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
			],
			'role' => [
				'type' => 'INT',
				'constraint' => 5,
			]
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createDatabase('user_felina');
	}

	public function down()
	{
		$this->forge->dropTable('user_felina');
	}
}
