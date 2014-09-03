<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToShopBookTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('shop_book', function(Blueprint $table) {
//            se establece clave foranea entre shop_book y book
            $table->foreign('book_id')
                    ->references('id')->on('books')
                    ->onDelete('cascade');
//            se establece clave foranea entre shop_book  y digital_book
            $table->foreign('digital_book_id')
                    ->references('id')->on('digital_book')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('shop_book', function(Blueprint $table) {
//            eliminando las claves foraneas
//            De shop book a book
            $table->dropForeign('shop_book_book_id_foreign');
//            De shop_book a digital_book
            $table->dropForeign('shop_book_digital_book_id_foreign');
        });
    }

}
