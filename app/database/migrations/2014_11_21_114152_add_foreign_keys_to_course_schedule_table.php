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
		Schema::table('course_schedules', function(Blueprint $table)
		{
			$table->foreign('course_id')
					->references('id')
					->on('courses');

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
		Schema::table('course_schedules', function(Blueprint $table)
		{
			$table->dropForeign('course_schedules_course_id_foreign');
			$table->dropForeign('course_schedules_venue_id_foreign');
			$table->dropForeign('course_schedules_professor_id_foreign');
		});
	}

}
