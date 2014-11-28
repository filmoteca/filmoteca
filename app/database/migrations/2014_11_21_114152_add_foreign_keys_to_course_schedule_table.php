<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToCourseScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->foreign('subject_id')
					->references('id')
					->on('subjects');

			$table->foreign('venue_id')
					->references('id')
					->on('venues');

			$table->foreign('professor_id')
					->references('id')
					->on('professors');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->dropForeign('courses_subject_id_foreign');
			$table->dropForeign('courses_venue_id_foreign');
			$table->dropForeign('courses_professor_id_foreign');
		});
	}

}
