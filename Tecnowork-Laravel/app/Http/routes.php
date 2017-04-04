<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('inicio', function () {
    return view('index');
});

//LOGIN

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

//LOGIN

//EGRESADO
Route::get('registro_egresado', function () {
    return view('registro_egresado');
});
Route::post('insertar_usuarios','usuariosController@insertar_usuarios');
                                     
//EGRESADO

//CLIENTE
Route::get('registro_cliente', function () {
    return view('registro_cliente');
});
Route::post('insertar_usuarios','usuariosController@insertar_usuarios');

//CLIENTE

//USUARIO

Route::get('editar/{id_usuario}','usuariosController@editar_usuario');
Route::get('listar','usuariosController@listar_usuarios');
Route::get('eliminar/{id_usuario}','usuariosController@eliminar_usuarios');
Route::post('actualizar/{id_usuario}','usuariosController@actualizar_usuarios');

//USUARIO

//ADMIN

Route::get('perfil_admin', function () {
 return view('perfil_administrador');
});

Route::get('agregar', function () {
 return view('agregar');
});

//ADMIN

//INDEX

Route::get('catalogo_general', function(){
	return view('catalogo_general');
});

Route::get('ayuda_soporte', function(){
	return view('ayuda_soporte');
});

Route::get('quienes_somos', function(){
	return view('quienes_somos');
});

Route::get('menu', function(){
	return view('Menu');
});

Route::get('inicio', function(){
	return view('index');
});

//INDEX