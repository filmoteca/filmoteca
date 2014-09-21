<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('schedules', function(Blueprint $table) {
			$table->foreign('auditorium_id')
					->references('id')->on('auditoriums')
					->onDelete('cascade');

			$table->foreign('exhibition_id')
					->references('id')->on('exhibitions')
					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('schedules', function(Blueprint $table) {
			$table->dropForeign('schedules_auditorium_id_foreign');

			$table->dropForeign('schedules_exhibition_id_foreign');
		});
	}

}
