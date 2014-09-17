<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnaEspecialCostToSpecialCostInAuditoriums extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('auditoriums', function(Blueprint $table)
		{
			$table->renameColumn('direction', 'address');

			$table->renameColumn('especial_cost','special_cost');
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
			$table->renameColumn('address', 'direction');

			$table->renameColumn('special_cost','especial_cost');
		});
	}

}
