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
    return view('welcome');
});

//profesores
Route::get('/damc/profesor/agregar/alumno',['as' => 'damc.profesor.agregar', 'uses' => 'ProfesorController@agregar']);
Route::get('/damc/profesor/calificar/alumno',['as' => 'damc.profesor.calificar', 'uses' => 'ProfesorController@calificar']);

//alumnos
Route::get('/damc/alumno/consultar/actividad',['as' => 'damc.alumno.consultar', 'uses' => 'AlumnoController@consultar']);

//tutores
Route::get('/damc/tutor/buscar/alumno',['as' => 'damc.tutor.buscar', 'uses' => 'TutorController@buscar']);
Route::get('/damc/tutor/consultar/alumno',['as' => 'damc.tutor.consultar', 'uses' => 'TutorController@consultar']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
