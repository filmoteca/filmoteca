<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToDigitalBook extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('digital_book', function(Blueprint $table) {
//            se establece clave foranea entre digital_book y book
            $table->foreign('book_id')
                    ->references('id')->on('books')
                    ->onDelete('cascade');
//            se establece clave foranea entre digital_book y shop_book 
            $table->foreign('shop_book_id')
                    ->references('id')->on('shop_book')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('digital_book', function(Blueprint $table) {
            //
        });
    }

}
