<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuariosModel extends Model
{

    protected $primaryKey='id_usuario';
	protected $table = 'usuarios';
 	protected $fillable=['tipo_identificacion','identificacion','nombres','apellidos','fecha_nacimiento', 'titulo', 'correo_electronico','contraseña', 'direccion', 'telefono', 'entidad_bancaria', 'numero_cuenta', 'id_tipo_transaccion', 'disponibilidad', 'tipo_usuario'];


 public $timestamps = false;
 
}
	