<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalBookTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('digital_book', function(Blueprint $table) {
            $table->increments('id');
//            id del libro digital en tabla libros
            $table->integer('book_id')->unsigned()->nullable(false);
//            id del libro digital en la tabla de venta de libros
            $table->integer('shop_book_id')->unsigned()->nullable(false);
//            titulo del libro digital
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('digital_book');
    }

}
