<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/** Produtos front **/
Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/visualizar/{id}', 'ProdutoController@visualizar');
Route::get('/produtos/formulario', 'ProdutoController@formulario');
Route::post('/produtos/salvar', 'ProdutoController@salvar');
Route::get('/produtos/deletar/{id}', 'ProdutoController@deletar');

/** Produtos api **/
Route::get('/api/produtos', 'ProdutoController@getProdutos');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
