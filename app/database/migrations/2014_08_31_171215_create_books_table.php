<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('books', function(Blueprint $table) {
			$table->increments('id');
			$table->text('title');
			$table->string('subtitle', 45);
			$table->text('autor');
			$table->integer('country_id')->unsigned();
			$table->string('year');
			$table->string('editorial');
			$table->string('isbn');
			$table->text('sinopsis');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('books');
	}

}
