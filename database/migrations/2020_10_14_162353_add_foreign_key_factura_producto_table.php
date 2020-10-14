<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFacturaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factura_producto', function (Blueprint $table) {
            $table->integer('factura')->unsigned();
            $table->foreign('factura')->references('id')->on('facturas')
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
        Schema::table('factura_producto', function (Blueprint $table) {
            $table->dropForeign('fp_factura_id_foreign');
            $table->dropForeign('fp_producto_id_foreign');
        });
    }
}
