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





Route::get('/nombre', function(){
	$nombre = config('app.name');
	return $nombre;
});

Route::get('/tiempo', function(){
	$zona = config('app.timezone');
	return $zona;
});

Route::get('/run', function(){
	config(['app.timezone' => 'America/Mexico_City']);
	$tiempo = config('app.timezone');
	return $tiempo;
});
Route::get('/admin',function(){
	return 'Hola desde admin';
});

Route::get('login',function(){
	return view('login');
});

Route::get('controller', 'LoginController@index');




Route::get('test','TestController@index');
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function(){
	return view('login');
	});

Route::get('principalStudent',function(){
	return view('principalStudent');
});

Route::get('principalAdmin',function(){
	return view('principalAdmin');
});

Route::get('infoStudent',function(){
	return view('infoStudent');
});

Route::get('newStudent',function(){
	return view('newStudent');
});

Route::get('newAdmin',function(){
	return view('newAdmin');
});

Route::get('addReport',function(){
	return view('addReport');
});

Route::get('main',function(){
	return view('layouts/main');
});
