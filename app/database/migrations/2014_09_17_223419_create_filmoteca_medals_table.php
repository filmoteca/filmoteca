<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmotecaMedalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('filmoteca_medals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 80)->nullable(false);
			$table->date('award_date')->nullable(false);
			$table->text('biography')->nullable(false);
			$table->softDeletes();
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
		Schema::drop('filmoteca_medals');
	}

}
