<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::resource('movie','MovieController');

/*
| Ruta Básica
*/
Route::get('prueba', function(){
	return "Hola desde routes.php";
});

/*
| Ruta Básica con Parámetro
*/
/*
| Estructura
| Route: => Referencia a clase
| get => Método HTTP
| 'nombre' => Nombre de la URL en el navegador
| '{nombre}' => parámetro que recibiremos mediante la ruta
| function($nombre) => funcion recibiendo el parámetro
*/
Route::get('nombre/{nombre}', function($nombre){
	return "Mi nombre es: " . $nombre;
});
Route::get('edad/{edad}', function($edad){
	return "Mi edad es: " . $edad;
});
/*-------------------*/
Route::get('/', function () {
    return view('welcome');
});


/* ***************************************************************** */
Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');