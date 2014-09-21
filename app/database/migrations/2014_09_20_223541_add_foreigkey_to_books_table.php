<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeigkeyToBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('books', function(Blueprint $table) {
			$table->foreign('country_id')->
					references('id')->on('country');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('books', function(Blueprint $table) {
			$table->dropForeign('books_country_id_foreign');
		});
	}

}
