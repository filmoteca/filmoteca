<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToSchedulesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('schedules', function(Blueprint $table) {
//            se agrega clave foranea de schedules a auditorium
            $table->foreign('auditorium_id')
                    ->references('id')->on('auditoriums')
                    ->onDelete('cascade');
//            se agrega clave foranea de schedules a exhibitions
            $table->foreign('exhibition_id')
                    ->references('id')->on('exhibitions')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('schedules', function(Blueprint $table) {
//            se borran las claves foraneas
//            de schedules a auditorium
            $table->dropForeign('schedules_auditorium_id_foreign');
//            de schedules a exhibitions
            $table->dropForeign('schedules_exhibition_id_foreign');
        });
    }

}
