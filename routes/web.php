<?php

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
Route::get('/', function () {
    return view('main');
});

//USUARIOS
Route::get('form_crear','UsersController@create');
Route::post('crear','UsersController@store');
Route::get('listar','UsersController@index');
Route::get('{id}/edit','UsersController@edit');
Route::post('actualizar/{id}','UsersController@update');
Route::post('eliminar/{id}','UsersController@destroy');
Route::get('/usuarios', function () {
    return view('users.templates.main');
});
//----------------------------------------------------------
//SALAS
Route::get('salas/form_crear','SalasController@create');
Route::post('salas/crear','SalasController@store');
Route::get('salas/listar','SalasController@index');
Route::get('salas/{id}/edit','SalasController@edit');
Route::post('salas/actualizar/{id}','SalasController@update');
Route::post('salas/eliminar/{id}','SalasController@destroy');
Route::get('/salas', function () {
    return view('salas.templates.main');
});
