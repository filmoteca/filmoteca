<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionSinceAndUntilColumnsToTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exhibition_types', function (Blueprint $table) {
            $table->string('slug');
            $table->text('description');
            $table->timestamp('since');
            $table->index('since');
            $table->timestamp('until');
            $table->index('until');
        });

        DB::statement("
            update exhibition_types 
            set slug = replace(replace(lower(trim(name)), ' ', '-'), '.', '');
        ");

        Schema::table('exhibition_types', function (Blueprint $table) {
            $table->unique('slug');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exhibition_types', function (Blueprint $table) {
            $table->dropColumn('slug');
            $table->dropColumn('description');
            $table->dropColumn('since');
            $table->dropColumn('until');
        });
    }
}
