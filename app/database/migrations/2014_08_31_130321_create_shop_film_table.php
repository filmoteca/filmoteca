<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopFilmTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('shop_films', function(Blueprint $table) 
        {
            $table->increments('id');
            
            $table->integer('film_id')->unsigned()->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('shop_film');
    }

}
