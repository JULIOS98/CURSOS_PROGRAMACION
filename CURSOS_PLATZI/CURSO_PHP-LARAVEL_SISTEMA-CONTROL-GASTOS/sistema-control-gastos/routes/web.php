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

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index2');

//Ruta que retorna un array asociativo en json
Route::get('/test', function () {
    return [
        'saludo' => 'Hola',
        'nombre'=> 'platzi'
    ];
});

//Ruta que retorna una vista con variables
Route::get('/test1', function () {
    return view('test1',
    [
        'title' => 'Curso de Prueba Platzi'
    ]);
});