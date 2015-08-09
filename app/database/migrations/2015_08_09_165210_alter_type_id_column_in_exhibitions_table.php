<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTypeIdColumnInExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::statement('ALTER TABLE `filmoteca`.`exhibitions` CHANGE COLUMN `type_id` `type_id` INT(10) UNSIGNED NULL ;');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        DB::statement('ALTER TABLE `filmoteca`.`exhibitions` CHANGE COLUMN `type_id` `type_id` INT(10) UNSIGNED NOT NULL ;');
	}

}
