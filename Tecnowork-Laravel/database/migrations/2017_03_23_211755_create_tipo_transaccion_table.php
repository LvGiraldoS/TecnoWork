<?php
/**
* @file 2017_03_23_211755_create_tipo_transaccion_table.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación Migración de la Tabla Tipo Transacción de DB
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


/**
* @class Representa la Clase CreateTipoTransaccionTable sobre la migración
*/
class CreateTipoTransaccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    * @fn up para la creación de la Tabla Tipo Transacción en DB
    */
    public function up()
    {
    Schema::create('tipo_transaccion', function (Blueprint $table) {
        $table->increments('id_tipo_transaccion');
        $table->string('nombre_tipo_transaccion');

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
