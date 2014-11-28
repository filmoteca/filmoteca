<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToCourseStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course_students', function(Blueprint $table)
		{
			$table->foreign('student_id')
					->references('id')
					->on('students')
					->onDelete('cascade');

			$table->foreign('course_id')
					->references('id')
					->on('courses')
					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course_students', function(Blueprint $table)
		{
			$table->dropForeign('course_students_student_id_foreign');
			$table->dropForeign('course_students_course_id_foreign');
		});
	}

}
