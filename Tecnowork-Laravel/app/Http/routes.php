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

Route::get('/', function () {
    return view('welcome');
});

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



