<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuariosModel;

class usuariosController extends Controller
{

    public function insertar_usuarios()
    {
        $data =Request()->all();
        
        registro_clientes::create($data);

    }

        public function listar_usuarios()
    {
        
    }

        public function actualizar_usuarios()
    {
        
    }
    
        public function eliminar_usuarios()
    {
        
    }

}
