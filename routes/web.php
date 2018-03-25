<?php

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/users','UsersController');
Route::resource('/students','StudentsController');
Route::resource('/reports','ReportsController');