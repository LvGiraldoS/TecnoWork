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
//INSERTAR USUARIOS
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
//INSERTAR USUARIOS

//EDITAR USUARIOS
    public function editar_usuario($id)
    {
         $usuario=usuariosModel::findorfail($id);
        return view ('listar_usuarios', compact('usuario'));
    }
//EDITAR USUARIOS

//LISTAR USUARIOS
        public function listar_usuarios()
    {
        $usuario=usuariosModel::all();
        return view('listar_usuarios', compact('usuario'));
    }
//LISTAR USUARIOS

//ACTUALIZAR USUARIOS
        public function actualizar_usuarios()
    {
        
    }
//ACTUALIZAR USUARIOS

//ELIMINAR USUARIOS
        public function eliminar_usuarios($id_usuario)
    {
    
        $usuario=usuariosModel::findorfail($id_usuario); 
        $usuario->delete();

        return redirect ()->to ('listar');
    }
//ELIMINAR USUARIOS
}
