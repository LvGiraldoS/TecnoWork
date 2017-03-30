<?php
/**
* @file 2017_03_29_211745_create_informe_servicio_table.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación Migración de la Tabla Informe Servicio de DB
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* @class Representa la Clase CreateInformeServicioTable sobre la migración
*/
class CreateInformeServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    * @fn up para la creación de la Tabla Informe Servicio en DB
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
