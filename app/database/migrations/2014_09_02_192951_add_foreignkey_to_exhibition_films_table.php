<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToExhibitionFilmsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('exhibition_films', function(Blueprint $table) {
//            se agrega clave foranea de exhibition_films a films
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
        Schema::table('exhibition_films', function(Blueprint $table) {
//            se borran las claves foraneas
//            de exhibition_films a films
            $table->dropForeign('exhibition_films_film_id_foreign');
        });
    }

}
