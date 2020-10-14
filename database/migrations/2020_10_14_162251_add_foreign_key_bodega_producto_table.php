<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyBodegaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bodega_producto', function (Blueprint $table) {
            $table->integer('bodega')->unsigned();
            $table->foreign('bodega')->references('id')->on('bodegas')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('producto')->unsigned();
            $table->foreign('producto')->references('id')->on('productos')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bodega_producto', function (Blueprint $table) {
            $table->dropForeign('bp_bodega_id_foreign');
            $table->dropForeign('bp_producto_id_foreign');
        });
    }
}
