<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropThumbnaiAndFullImagesInAuditoriums extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('auditoriums', function(Blueprint $table)
		{
			$table->dropColumn('thumbnail_image');
			
			$table->dropColumn('full_image');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('auditoriums', function(Blueprint $table)
		{
			$table->string('thumbnail_image',255)->default('/assets/imgs/no-photo.jpg');

			$table->string('full_image',255)->default('/assets/imgs/no-photo.jpg');
		});
	}

}
