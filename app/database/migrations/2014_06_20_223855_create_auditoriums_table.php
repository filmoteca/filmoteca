<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditoriumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auditoriums', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('venue')->unsigned()->default(null);

			$table->timestamps();

			$table->string('name')->nullable(false);

			$table->string('direction', 255);

			$table->string('telephone');

			$table->string('schedule');

			$table->decimal('general_cost')->nullable(false)->default(0);

			$table->decimal('especial_cost')->nullable(false)->default(0);

			$table->string('map')->nullable(false);

			$table->string('thumbnail_image')->default('no-photo');

			$table->string('full_image')->default('no-photo');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('auditoriums');
	}

}
