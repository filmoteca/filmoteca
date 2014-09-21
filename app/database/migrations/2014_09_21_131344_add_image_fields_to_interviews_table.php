<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImageFieldsToInterviewsTable extends Migration {

	/**
	 * Make changes to the table.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::table('interviews', function(Blueprint $table) {		
			
			$table->string("image_file_name")->nullable();
			$table->integer("image_file_size")->nullable();
			$table->string("image_content_type")->nullable();
			$table->timestamp("image_updated_at")->nullable();

			$table->string("audio_file_name")->nullable();
			$table->integer("audio_file_size")->nullable();
			$table->string("audio_content_type")->nullable();
			$table->timestamp("audio_updated_at")->nullable();

			$table->string("video_file_name")->nullable();
			$table->integer("video_file_size")->nullable();
			$table->string("video_content_type")->nullable();
			$table->timestamp("video_updated_at")->nullable();

		});

	}

	/**
	 * Revert the changes to the table.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('interviews', function(Blueprint $table) {

			$table->dropColumn("image_file_name");
			$table->dropColumn("image_file_size");
			$table->dropColumn("image_content_type");
			$table->dropColumn("image_updated_at");

			$table->dropColumn("audio_file_name");
			$table->dropColumn("audio_file_size");
			$table->dropColumn("audio_content_type");
			$table->dropColumn("audio_updated_at");

			$table->dropColumn("video_file_name");
			$table->dropColumn("video_file_size");
			$table->dropColumn("video_content_type");
			$table->dropColumn("video_updated_at");

		});
	}

}