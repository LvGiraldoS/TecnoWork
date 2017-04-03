<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use usuariosModel;

class tipotransaccionModel extends Model
{   
	 protected $primaryKey='id_tipo_transaccion';
    protected $table = 'tipo_transaccion'; /**< *@var $table Representa la Tabla usuarios de  DB*/
 	protected $fillable=['id_tipo_transaccion','nombre_tipo_transaccion']; /**< *@var fillable Representa las etiquetas de DB*/


 public $timestamps = false;
    public function usuarios()
    {
        return $this->hasMany('usuariosModel','id_tipo_transaccion','id_tipo_transaccion');
    }
 }
