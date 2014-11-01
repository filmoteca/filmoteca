<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePressRegisterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('press_registers', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->integer('the_media_id')->unsigned()->nullable(false);
			$table->string('the_media_name')->nullable(false);
			$table->string('the_media_address');
			$table->string('reporter_name')->nullable(false);
			$table->string('reporter_telephone',13)->nullable(false);
			$table->string('reporter_mobile_phone', 13)->nullable(false);
			$table->string('reporter_email')->nullable(false);
			$table->string('editor_name');
			$table->string('editor_telephone');
			$table->string('editor_email');
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
		Schema::drop('press_registers');
	}

}
