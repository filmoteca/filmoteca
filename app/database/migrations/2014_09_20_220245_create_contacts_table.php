<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('contacts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 80);
			$table->string('email', 80);
			$table->string('telephone', 12);
			$table->text('comment');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('contacts');
	}

}
