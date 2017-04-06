<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformeServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informe_servicio', function (Blueprint $table) {
            $table->increments('id_informe_servicio');
            $table->integer('numero_servicio');
            $table->datetime('fecha_servicio');
            $table->integer('valor_total_servicio');
            $table->integer('id_tipo_servicio');
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
