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
        Schema::create('digital_books', function(Blueprint $table) {
            $table->increments('id');

            $table->integer('book_id')->nullable(false)->unsigned();
            
            $table->integer('shop_book_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('digital_books');
    }

}
