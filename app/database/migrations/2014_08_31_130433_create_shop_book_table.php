<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopBookTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('shop_book', function(Blueprint $table) {
            $table->increments('id');
//            id del libro en tabla libros
            $table->integer('book_id')->nullable(false)->unsigned();
//            id del libro en table libros digitales
            $table->integer('digital_book_id')->nullable(false)->unsigned();
//            titulo del libro
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('shop_book');
    }

}
