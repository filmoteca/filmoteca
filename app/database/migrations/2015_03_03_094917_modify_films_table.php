<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyFilmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('films', function(Blueprint $table)
		{
			$table->dropColumn('year');
			$table->string('original_title', 255)->nullable(true);
			$table->string('years', 255)->nullable(true);
			$table->dropForeign('films_country_id_foreign');
			$table->dropColumn('country_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('films', function(Blueprint $table)
		{
			$table->date('year');
			$table->dropColumn('original_title');
			$table->dropColumn('years');
			$table->integer('country_id')->unsigned();
			$table->foreign('country_id')
					->references('id')->on('countries');
		});
	}

}
