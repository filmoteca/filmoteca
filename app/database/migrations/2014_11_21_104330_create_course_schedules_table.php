<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_schedules', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id')->unsigned();
			$table->integer('professor_id')->unsigned();
			$table->integer('venue_id')->unsigned();
			$table->string('total_hours')->nullable(false);
			$table->string('schedule')->nullable(false);
			$table->date('start_date')->nullable(false);
			$table->date('end_date')->nullable(false);
			$table->decimal('general_price')->default(0.0);
			$table->decimal('unam_member_price')->default(0.0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_schedules');
	}

}
