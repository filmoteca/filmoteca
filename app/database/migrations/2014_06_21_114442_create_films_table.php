g<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('films', function(Blueprint $table) {
			$table->increments('id');

			$table->timestamps();

			$table->string('title', 255)->nullable(false);

			$table->date('year');

			$table->integer('country_id')->unsigned();

			$table->time('duration');

			$table->integer('genre_id')->unsigned();

			$table->text('director');

			$table->text('script');

			$table->text('photographic');

			$table->text('music');

			$table->text('edition');

			$table->text('production');

			$table->text('cast');

			$table->text('synopsis');

			$table->text('trailer');

			$table->string('thumbnail_image', 255)->default('/assets/imgs/no-photo.jpg');

			$table->string('full_image', 255)->default('/assets/imgs/no-photo.jpg');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('films');
	}

}
