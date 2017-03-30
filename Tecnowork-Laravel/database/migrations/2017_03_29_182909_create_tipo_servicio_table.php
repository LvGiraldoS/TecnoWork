<?php
/**
* @file 2017_03_29_182909_create_tipo_servicio_table.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación Migración de la Tabla Tipo Servicio de DB
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* @class Representa la Clase CreateTipoServicioTable sobre la migración
*/
class CreateTipoServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    * @fn up para la creación de la Tabla Tipo Servicio en DB
    */
    public function up()
    {
        Schema::create('tipo_servicio', function (Blueprint $table) {
            $table->increments('id_tipo_servicio');
            $table->string('nombre_tipo_servicio');
            $table->integer('valor_minimo_servicio');
            $table->integer('valor_maximo_servicio');
           
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
