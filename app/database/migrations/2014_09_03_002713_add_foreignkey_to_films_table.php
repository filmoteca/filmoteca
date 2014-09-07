<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToFilmsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::table('films', function(Blueprint $table) 
        {
            $table->foreign('genre_id')
                ->references('id')->on('genres');
            $table->foreign('country_id')
                ->references('id')->on('country');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() 
    {
        Schema::table('films', function(Blueprint $table) 
        {
            $table->dropForeign('films_genre_id_foreign');
            
            $table->dropForeign('films_country_id_foreign');
        });
    }

}
