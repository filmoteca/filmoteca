<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('receipts', function(Blueprint $table) {
			$table->increments('id');
			$table->char('rfc', 15);
			$table->integer('numero_de_orden');
			$table->float('monto_de_orden');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('receipts');
	}

}
