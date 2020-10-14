<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sucursales', function (Blueprint $table) {
            $table->integer('empresa')->unsigned();
            $table->foreign('empresa')->references('id')->on('empresas')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('usuario')->unsigned();
            $table->foreign('usuario')->references('id')->on('usuarios')
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
        Schema::table('sucursales', function (Blueprint $table) {
            $table->dropForeign('sucursales_usuario_id_foreign');
            $table->dropForeign('sucursales_empresa_id_foreign');
        });
    }
}
