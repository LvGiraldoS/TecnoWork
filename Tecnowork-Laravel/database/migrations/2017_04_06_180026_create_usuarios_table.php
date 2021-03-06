<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('tipo_identificacion');
            $table->string('identificacion');
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');
            $table->string('titulo');
            $table->string('correo_electronico');
            $table->string('contraseña');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('entidad_bancaria');
            $table->integer('numero_cuenta');
            $table->integer('id_tipo_transaccion');
            $table->string('disponibilidad');
            //$table->integer('tipo_usuario');
            $table->string('tipo_usuario');
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
