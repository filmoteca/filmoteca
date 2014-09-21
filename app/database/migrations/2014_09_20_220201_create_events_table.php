<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre', 45);
			$table->string('descripcion', 45);
			$table->dateTime('fecha');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('events');
	}

}
