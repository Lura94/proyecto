<?php

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/users','UsersController');
Route::resource('/students','StudentsController');
Route::resource('/reports','ReportsController');
Route::get('reports/export/{id}','ReportsController@export');
Route::post('students/find',['as' => 'students.find', 'uses' => 'StudentsController@find']);