<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carousel_images', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('image');
            $table->string('title');
            $table->string('description');
            $table->string('link');
            $table->integer('carousel_id');
			$table->timestamps();

            // TODO: create foreign key.
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('carousel_images');
	}

}
