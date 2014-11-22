<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', '30')->nullable(false);
			$table->string('last_name', '30')->nullable(false);
			$table->string('second_last_name', '30')->nullable(false);
			$table->string('enrolment', '10')->nullable(false);
			$table->string('telephone', 13)->nullable(false);
			$table->string('mobile', 13)->nullable(false);
			$table->string('email')->nullable(false);
			$table->boolean('unam_member')->default(false);
			$table->enum('status',['active', 'inactive']);
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
		Schema::drop('students');
	}

}
