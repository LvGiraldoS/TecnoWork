<?php
/**
* @file 2017_03_28_193628_create-usuarios-table.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación Migración de la Tabla Usuarios de DB
*/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* @class Representa la Clase CreateUsuariosTable sobre la migración
*/
class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**
    * @fn up para la creación de la Tabla Usuarios en DB
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
