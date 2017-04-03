<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposervicioModel extends Model
{

	// AUN NO SE HA DESARROLLADO
    protected $primaryKey='id_tipo_servicio';
    protected $table = 'tipo_servicio'; /**< *@var $table Representa la Tabla usuarios de  DB*/
 	protected $fillable=['id_tipo_servicio','	nombre_tipo_servicio']; /**< *@var fillable Representa las etiquetas de DB*/
}
