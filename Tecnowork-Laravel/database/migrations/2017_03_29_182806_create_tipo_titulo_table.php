<?php
/**
* @file 2017_03_29_182806_create_tipo_titulo_table.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación Migración de la Tabla Tipo Titulo de DB
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* @class Representa la Clase CreateTipoTituloTable sobre la migración
*/
class CreateTipoTituloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    * @fn up para la creación de la Tabla Tipo Titulo en DB
    */
    public function up()
    {
        Schema::create('tipo_titulo', function (Blueprint $table) {
            $table->increments('id_titulo');
            $table->string('nombre_titulo');
            
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
