<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('shop_items', function(Blueprint $table) {
            $table->increments('id');
//            tipo de objeto a vender en la tienda
            $table->string('type')->nullable(false);
//            numero de identificacion del objeto en la tienda
            $table->integer('type_id')->unsigned()->nullable(false);
//            nombre o descripcion del objeto
            $table->string('name')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('shop_items');
    }

}
