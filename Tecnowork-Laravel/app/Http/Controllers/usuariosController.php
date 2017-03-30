<?php
/**
* @file usuariosController.php
* @Author LV -Andres Otalora
* @date 
* @brief implementación del controlador
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\usuariosModel;

/**
* @class UsuariosController
* @brief Representa una clase sobre los usuarios
*/
class usuariosController extends Controller
{
/*
    public function insertar_usuarios()
    {
        $data =Request()->all();
        
        usuariosModel::create($data);

    }*/
//INSERTAR USUARIOS
    /**
    * @fn Insertar_usuarios Representa la inserción de usuarios sobre el modelo UsuariosModel
    */
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
    /**
    * @fn editar_usuario Representa la edición de usuarios sobre el modelo UsuariosModel
    * @returns listar_usuarios vista
    */
    public function editar_usuario($id)
    {
         $usuario=usuariosModel::findorfail($id);
        return view ('listar_usuarios', compact('usuario'));
    }
//EDITAR USUARIOS

//LISTAR USUARIOS
    /**
    * @fn listar_usuarios Representa la visualización  de usuarios sobre el modelo UsuariosModel
    * @returns listar_usuarios vista
    */
        public function listar_usuarios()
    {
        $usuario=usuariosModel::all();
        return view('listar_usuarios', compact('usuario'));
    }
//LISTAR USUARIOS

//ACTUALIZAR USUARIOS
    /**
    * @fn actualizar_usuarios Representa la actualización de usuarios sobre el modelo UsuariosModel
    */
        public function actualizar_usuarios()
    {
        
    }
//ACTUALIZAR USUARIOS

//ELIMINAR USUARIOS
    /**
    * @fn eliminar_usuarios Representa la eliminación de usuarios sobre el modelo UsuariosModel
    * @returns listar_usuarios vista por medio de la ruta listar
    */
        public function eliminar_usuarios($id_usuario)
    {
    
        $usuario=usuariosModel::findorfail($id_usuario); 
        $usuario->delete();

        return redirect ()->to ('listar');
    }
//ELIMINAR USUARIOS
}
