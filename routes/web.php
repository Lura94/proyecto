<?php

Auth::routes();

Route::get('/', 'HomeController@index');
Route::post('/users/filter',['as' => 'users.filter', 'uses' => 'UsersController@filter']);
Route::resource('/users','UsersController');
Route::get('students/export','StudentsController@export');
Route::post('/students/filter',['as' => 'students.filter', 'uses' => 'StudentsController@filter']);
Route::resource('/students','StudentsController');
Route::get('reports/export/{id}','ReportsController@export');
Route::post('/reports/filter',['as' => 'reports.filter', 'uses' => 'ReportsController@filter']);
Route::get('reports/exportAll', 'ReportsController@exportAll');
Route::resource('/reports','ReportsController');
Route::post('students/find',['as' => 'students.find', 'uses' => 'StudentsController@find']);