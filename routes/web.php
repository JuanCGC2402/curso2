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

// Route::get('/empleados','EmpleadoController@index');

// Route::get('/empleados/create','EmpleadoController@create');

// Route::post('/empleados/store','EmpleadoController@store');

// Route::post('/empleados/update','EmpleadoController@update');

Route::resource('/empleados','EmpleadoController');
Route::get('/', function () {
    return view('welcome');
});
