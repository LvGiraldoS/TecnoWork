<?php
/**
* @file usuariosModel.php
* @Author LV - Andres Otalora
* @date
* @brief Implementación del modelo
*/

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* @class usuariosModel
* @brief Representa el MVC(Modelo Vista Controlador)
*/
class usuariosModel extends Model
{

    protected $primaryKey='id_usuario'; /**< *@var primaryKey Representa la LLave Primaria*/
	protected $table = 'usuarios'; /**< *@var $table Representa la Tabla usuarios de  DB*/
 	protected $fillable=['tipo_identificacion','identificacion','nombres','apellidos','fecha_nacimiento', 'titulo', 'correo_electronico','contraseña', 'direccion', 'telefono', 'entidad_bancaria', 'numero_cuenta', 'id_tipo_transaccion', 'disponibilidad', 'tipo_usuario']; /**< *@var fillable Representa las etiquetas de DB*/


 public $timestamps = false;
 
}
	