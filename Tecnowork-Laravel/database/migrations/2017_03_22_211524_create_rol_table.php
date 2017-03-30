<?php
/**
* @file 2017_03_22_211524_create_rol_table.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación Migración de la Tabla Rol de DB
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* @class Representa la Clase CreateRolTable sobre la migración
*/
class CreateRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    * @fn up para la creación de la Tabla Rol en DB
    */
    public function up()
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->increments('id_rol');
            $table->string('nombre_rol');
           
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
