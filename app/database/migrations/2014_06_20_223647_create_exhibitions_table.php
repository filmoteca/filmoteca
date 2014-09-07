<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExhibitionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('exhibitions', function(Blueprint $table) 
        {
            $table->bigIncrements('id');

            $table->timestamps();

            $table->integer('exhibition_film_id')->unsigned()->nullable(false);

            $table->integer('type_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('exhibitions');
    }

}
