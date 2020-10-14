<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facturas', function (Blueprint $table) {
            $table->integer('cliente')->unsigned();
            $table->foreign('cliente')->references('id')->on('clientes')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('sucursal')->unsigned();
            $table->foreign('sucursal')->references('id')->on('sucursales')
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
        Schema::table('facturas', function (Blueprint $table) {
            $table->dropForeign('facturas_cliente_id_foreign');
            $table->dropForeign('facturas_sucursal_id_foreign');
        });
    }
}
