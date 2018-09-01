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

/**
 * --------------------------------------------------------------------------
 * Rotas Globais
 * --------------------------------------------------------------------------
 */
Route::get('/','Controller@index');
Route::get('/sobre','Controller@sobre');
Route::get('/termos','Controller@termos');
Route::get('/privacidade','Controller@privacidade');
Route::get('/contato','Controller@contato');

/**
 * --------------------------------------------------------------------------
 * Rotas para os Restaurantes
 * --------------------------------------------------------------------------
 */
Route::get('/restaurante/cadastro','RestaurantController@cadastro');
Route::get('/restaurante/login','RestaurantController@login');
Route::get('/restaurante/dashboard','RestaurantController@dashboard');
Route::get('/restaurante/pedidos','RestaurantController@pedidos');
Route::get('/restaurante/cardapio','RestaurantController@cardapio');
Route::get('/restaurante/administrador','RestaurantController@administrador');
Route::get('/restaurante/relatorios','RestaurantController@relatorios');

/**
 * --------------------------------------------------------------------------
 * Rotas para os Usuarios
 * --------------------------------------------------------------------------
 */
Route::get('/entrar','UserController@entrar');

/**
 * --------------------------------------------------------------------------
 * Rotas para os Administradores
 * --------------------------------------------------------------------------
 */
Route::get('/adm/login','AdminitratorController@login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
