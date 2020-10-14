<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyBodegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bodegas', function (Blueprint $table) {
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('usuarios')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('empresa')->unsigned();
            $table->foreign('empresa')->references('id')->on('empresas')
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
        Schema::table('bodegas', function (Blueprint $table) {
            $table->dropForeign('bodega_usuario_id_foreign');
            $table->dropForeign('bodega_empresa_id_foreign');
        });
    }
}
