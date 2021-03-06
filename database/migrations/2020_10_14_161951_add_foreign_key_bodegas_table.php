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
            $table->dropForeign('bodega_empresa_id_foreign');
        });
    }
}
