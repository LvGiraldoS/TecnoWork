<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_usuarios', function (Blueprint $table) {
            $table->increments('id_servicio');
            $table->integer('id_usuario');
            $table->date('fecha_servicio');
            $table->datetime('rango_hora_servicio');
            $table->string('direccion_servicio');
            $table->string('especificacion_servicio');
            $table->decimal('calificacion_servicio');
           
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
