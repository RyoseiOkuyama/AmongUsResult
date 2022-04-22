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

Route::get('/', 'ResultController@index');

Route::get('/communities/create', 'CommunityController@createcommunity');
Route::post('/communities/created', 'CommunityController@CreatedCommunity');
Route::get('/communities/index', 'CommunityController@index');
Route::get('/communities/{community}', 'CommunityController@ShowCommunity');

Route::get('/regulations/create/{community}', 'CommunityController@CreateRegulation');
Route::post('/regulations/created', 'CommunityController@CreatedRegulation');
Route::get('/regulations/{regulation}', 'CommunityController@ShowRegulation');

Route::get('/players/create/{community}', 'CommunityController@CreatePlayer');
Route::post('/players/created', 'CommunityController@CreatedPlayer');
Route::get('/players/{player}', 'CommunityController@ShowPlayer');


Route::get('/results/create1', 'ResultController@create1');
Route::post('/results/create3', 'ResultController@store');
Route::get('/results/create2/{community}/{regulation}', 'ResultController@create2');
Route::get('/results/{result}', 'ResultController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
