<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyProveedorProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proveedor_producto', function (Blueprint $table) {
            $table->integer('proveedor')->unsigned();
            $table->foreign('proveedor')->references('id')->on('proveedores')
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
        Schema::table('proveedor_producto', function (Blueprint $table) {
            $table->dropForeign('pp_proveedor_id_foreign');
            $table->dropForeign('pp_producto_id_foreign');
        });
    }
}
