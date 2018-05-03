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
  

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'livro', 'where'=>['id'=>'[0-9]+']],function(){
	Route::get('index',['as'=>'livro.index', 'uses'=>'LivroController@index']);
	Route::get('create',['as'=>'livro.create', 'uses'=>'LivroController@create']);
	Route::post('store',['as'=>'livro.store', 'uses'=>'LivroController@store']);
	Route::get('{id}/destroy',['as'=>'livro.destroy', 'uses'=>'LivroController@destroy']);
	Route::get('{id}/edit',['as'=>'livro.edit', 'uses'=>'LivroController@edit']);
	Route::put('{id}/update',['as'=>'livro.update', 'uses'=>'LivroController@update']);
});


Route::group(['prefix'=>'requisitante', 'where'=>['id'=>'[0-9]+']],function(){
	Route::get('index',['as'=>'requisitante.index', 'uses'=>'RequisitanteController@index']);
	Route::get('create',['as'=>'requisitante.create', 'uses'=>'RequisitanteController@create']);
	Route::post('store',['as'=>'requisitante.store', 'uses'=>'RequisitanteController@store']);
	Route::get('{id}/destroy',['as'=>'requisitante.destroy', 'uses'=>'RequisitanteController@destroy']);
	Route::get('{id}/edit',['as'=>'requisitante.edit', 'uses'=>'RequisitanteController@edit']);
	Route::put('{id}/update',['as'=>'requisitante.update', 'uses'=>'RequisitanteController@update']);
});
