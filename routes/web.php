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

Route::get('/communities/community_create', 'CommunityController@CreateCommunity');
Route::post('/communities/created', 'CommunityController@CreatedCommunity');
Route::get('/communities/community_index', 'CommunityController@index');
Route::get('/communities/{community}', 'CommunityController@ShowCommunity');

Route::get('/regulations/regulation_create/{community}', 'CommunityController@CreateRegulation');
Route::post('/regulations/created', 'CommunityController@CreatedRegulation');
Route::get('/regulations/{regulation}', 'CommunityController@ShowRegulation');

Route::get('/players/player_create/{community}', 'CommunityController@CreatePlayer');
Route::get('/players/player_link/{player}', 'CommunityController@LinkPlayer');
Route::get('/players/player_show/{player}', 'CommunityController@ShowPlayer');
Route::put('/players/{player}', 'CommunityController@LinkedPlayer');
Route::post('/players/created', 'CommunityController@CreatedPlayer');



Route::get('/results/result_create1', 'ResultController@create1');
Route::get('/results/result_create2', 'ResultController@create2');
Route::get('/results/result_create3', 'ResultController@create3');
Route::get('/results/result_create4/{result}', 'ResultController@create4');
Route::put('/results/result_created', 'ResultController@created');
Route::get('/results/{result}', 'ResultController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
