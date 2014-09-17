<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameVenueColumnInAuditoriums extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('auditoriums', function(Blueprint $table)
		{
			$table->renameColumn('venue', 'venue_id');
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
			$table->renameColumn('venue_id', 'venue');
		});
	}

}
