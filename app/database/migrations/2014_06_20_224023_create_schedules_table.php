<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('schedules', function(Blueprint $table) {
            $table->increments('id');

            $table->timestamps();

            $table->bigInteger('exhibition_id')->nullable(false)->unsigned();

            $table->integer('auditorium_id')->nullable(false)->unsigned();

            $table->timestamp('entry')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('schedules');
    }

}
