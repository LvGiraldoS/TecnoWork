<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use usuariosModel;

class tipotituloModel extends Model
{
     
	protected $primaryKey='id_titulo';
    protected $table = 'tipo_titulo'; /**< *@var $table Representa la Tabla usuarios de  DB*/
 	protected $fillable=['id_titulo','	nombre_titulo']; /**< *@var fillable Representa las etiquetas de DB*/

}