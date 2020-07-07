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

// Auth::routes();
//
Route::get('/', function(){
  return Redirect::to('/data');
});

//Роут показа всего/постраничного режима Data index
Route::get('/data/view', 'Data\DataController@changeViewMode')->name('data.view');
//Роут для поиска Data
Route::get('/data/search/', 'Data\DataController@search')->name('data.search');
//Роут для очистки результатов поиска Data
Route::get('/data/clear', 'Data\DataController@clear')->name('data.clear');
//Роуты для MVC Data, за исключением show
Route::resource('data', 'Data\DataController',
					['except' => ['show']]);


//Роуты для MVC Tokens, за исключением show
Route::resource('tokens', 'Tokens\TokensController',
					['except' => ['show']]);


//Роуты для MVC Employees, за исключением show
Route::resource('employees', 'EmployeesController',
					['except' => ['show']]);

//Роуты для MVC Eds
Route::resource('eds', 'Eds\EdsController',
					['except' => ['show', 'edit']]);
//Роут показа только активных/всех ЭЦП
Route::get('/eds/view', 'Eds\EdsController@changeViewMode')->name('eds.view');