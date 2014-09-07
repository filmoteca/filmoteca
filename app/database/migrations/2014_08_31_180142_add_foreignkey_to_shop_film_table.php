<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToShopFilmTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::table('shop_films', function(Blueprint $table) 
        {
            $table->foreign('film_id')->references('id')->on('films')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('shop_films', function(Blueprint $table) 
        {
            //
//            $table->dropForeign('shop_film_film_id_foreign');
        });
    }

}
