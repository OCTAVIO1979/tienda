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

Route::group(['prefix'	=>	'admin'], function(){
	
	Route::resource('users', 'UsersController');
	//esta la creo para eliminar de forma mas facil
	Route::get('users/{id}/destroy', [
		'uses'	=>	'UsersController@destroy',
		'as'	=>	'admin.users.destroy'
		]);

	Route::resource('tecnicos', 'TecnicosController');
	Route::get('tecnicos/{id}/destroy', [
		'uses'	=>	'TecnicosController@destroy',
		'as'	=>	'admin.tecnicos.destroy'
		]);

	Route::resource('equipos', 'EquiposController');
	Route::get('equipos/{id}/destroy', [
		'uses'	=>	'EquiposController@destroy',
		'as'	=>	'admin.equipos.destroy'
		]);




});

	





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
