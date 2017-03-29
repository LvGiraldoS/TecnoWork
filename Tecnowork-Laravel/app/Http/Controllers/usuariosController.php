<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuariosModel;

class usuariosController extends Controller
{
/*
    public function insertar_usuarios()
    {
        $data =Request()->all();
        
        usuariosModel::create($data);

    }*/

    protected function insertar_usuarios(Request $request)
    {
    
        usuariosModel::create([
            'tipo_identificacion' => $request['tipo_identificacion'],
            'identificacion' => $request['identificacion'],
            'nombres' => $request['nombres'],
            'apellidos' => $request['apellidos'],
            'fecha_nacimiento' => $request['fecha_nacimiento'],
            'titulo' => $request['titulo'],
            'correo_electronico' => $request['correo_electronico'],
            'contraseña' => bcrypt($request['contraseña']),
            'direccion' => $request['direccion'],
            'telefono' => $request['telefono'],
            'entidad_bancaria' => $request['entidad_bancaria'],
            'numero_cuenta' => $request['numero_cuenta'],
            'id_tipo_transaccion' => $request['id_tipo_transaccion'],
            'disponibilidad' => $request['disponibilidad'],
            'tipo_usuario' => $request['tipo_usuario'],

        ]);

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
