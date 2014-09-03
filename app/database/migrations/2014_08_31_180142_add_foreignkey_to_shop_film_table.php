<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToShopFilmTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('shop_film', function(Blueprint $table) {
            //se crea la clave foranea de shop films a films
            $table->foreign('film_id')
                    ->references('id')->on('films')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('shop_film', function(Blueprint $table) {
            //
        });
    }

}
