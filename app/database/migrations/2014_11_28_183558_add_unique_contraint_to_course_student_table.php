<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUniqueContraintToCourseStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course_student', function(Blueprint $table)
		{
			$table->unique(['course_id','student_id'], 'course_id_student_id_uniques');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course_student', function(Blueprint $table)
		{
			/**
			 * Para borrar una inidce único se tienen que borrar primero las 
			 * claves foraneas.
			 */
			$table->dropForeign('course_student_student_id_foreign');
			$table->dropForeign('course_student_course_id_foreign');


			$table->dropUnique('course_id_student_id_uniques');

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

}
