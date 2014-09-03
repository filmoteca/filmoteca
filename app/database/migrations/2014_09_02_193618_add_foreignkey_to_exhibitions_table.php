<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToExhibitionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('exhibitions', function(Blueprint $table) {
//            se crea clave foranea entre exhibitions y exhibition_films
            $table->foreign('exhibition_film_id')
                    ->references('id')->on('exhibition_films')
                    ->onDelete('cascade');
            $table->foreign('type_id')
                    ->references('id')->on('')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('exhibitions', function(Blueprint $table) {
//            se borran las claves foraneas
//            de exhibitions a exhibition_films
            $table->dropForeign('exhibitions_exhibition_film_id_foreign');
        });
    }

}
