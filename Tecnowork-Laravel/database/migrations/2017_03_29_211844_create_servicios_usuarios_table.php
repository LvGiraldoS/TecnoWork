<?php
/**
* @file 2017_03_29_211844_create_servicios_usuarios_table.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación Migración de la Tabla Servicios Usuarios de DB
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* @class Representa la Clase CreateServiciosUsuariosTable sobre la migración
*/
class CreateServiciosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    * @fn up para la creación de la Tabla Servicios Usuarios en DB
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
