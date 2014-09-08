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
        Schema::table('digital_books', function(Blueprint $table) {

            $table->foreign('book_id')->references('id')->on('books')
                    ->onDelete('cascade');

            $table->foreign('shop_book_id')->references('id')->on('shop_books')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('digital_books', function(Blueprint $table) {

            $table->dropForeign('digital_books_book_id_foreign');

            $table->dropForeign('digital_books_shop_book_id_foreign');
        });
    }

}
