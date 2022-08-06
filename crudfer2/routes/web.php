<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('usuario/listar');
});*/

Route::get('/','UsuarioController@inicio');
Route::get('/nuevo','UsuarioController@nuevo_usuario');
Route::post('/guardarUsuario','UsuarioController@guardar_nuevo_usuario')->name('guardarUsuario');

Route::get('/eliminar','UsuarioController@eliminar_usuario');

Route::get('/editar/{id}','UsuarioController@editar_usuario')->name('editarUsuario');
Route::post('/guardarEditarUsuario','UsuarioController@guardar_editar_usuario')->name('guardarEditarUsuario');
