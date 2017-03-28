<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuariosModel extends Model
{
	protected $table = 'usuarios';
 protected $fillable=['	tipo_identificacion','identificacion','nombres','apellidos','fecha_nacimiento','correo_electronico','contraseña', 'direccion', 'telefono', 'entidad_bancaria', 'numero_cuenta', 'id_tipo_transaccion', 'disponibilidad'];

 public $timestamps = false;
}
	