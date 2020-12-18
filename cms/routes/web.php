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

Route::get('/', function () {
    return view('welcome');
});

//se crea clase route get cuando se entre modulo ejemplo se ejecute el controlador ejemplo controller que se ejecute la funcion index
//se llama el parametro id mediante el {} para realizar referencia a ese parametro
//Route::get('/ejemplo/{id}','EjemploController@index');
Route::resource('ejemplo','EjemploController');