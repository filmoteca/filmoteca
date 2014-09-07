<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopBookTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('shop_books', function(Blueprint $table) 
        {
            $table->increments('id');

            $table->integer('book_id')->nullable(true)->unsigned();

            $table->integer('digital_book_id')->nullable(true)->unsigned();
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
