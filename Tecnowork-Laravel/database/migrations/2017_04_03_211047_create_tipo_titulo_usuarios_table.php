<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTituloUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_titulo_usuarios', function (Blueprint $table) {
            $table->integer('id_usuario');
            $table->integer('id_tipo_titulo');

            $table->foreign('id_tipo_transaccion')->references('id_tipo_transaccion')->on('tipo_transaccion');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
