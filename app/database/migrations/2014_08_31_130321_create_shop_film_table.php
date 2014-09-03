<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopFilmTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('shop_film', function(Blueprint $table) {
            $table->increments('id');
//            numero de identificacion del film en la tabla films
            $table->integer('film_id')->unsigned()->nullable(false);
//            titulo del film
            $table->string('title');
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
