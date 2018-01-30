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

Route::get('/',"HomeController@welcome");

Route::get('recettes',"RecipeController@liste" );

Route::get('monnayeur', 'MoneyController@liste');

Route::get('ingredients', "IngredientsController@reloaded_delet");

Route::get('ventes', 'OrderController@liste');

//-------------------------------------------------------------------------\\

Route::get('boissons', 'BoissonsController@index');

Route::get('boissons/show/{id}', 'BoissonsController@show')->name('ficheBoisson');

Route::get('boissons-tri-prix', 'BoissonsController@orderByPrice')->name('boissonsParPrix');
Route::get('boissons-tri-alpha', 'BoissonsController@orderByName')->name('boissonsParNom');

Route::get('boissons/create', 'BoissonsController@create')->name('create');
Route::post('store', 'BoissonsController@store');

Route::get('boissons/edit/{id}', 'BoissonsController@edit')->name('edit');
Route::post('boissons/update/{id}', 'BoissonsController@update');

Route::get('boissons/destroy/{id}', 'BoissonsController@destroy')->name('delete');
