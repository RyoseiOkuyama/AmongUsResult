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

/* communityのルーティング */
Route::get('/communities/community_create', 'CommunityController@CreateCommunity')->middleware('auth');
Route::post('/communities/created', 'CommunityController@CreatedCommunity');
Route::get('/communities/community_index', 'CommunityController@index');
Route::get('/communities/{community}', 'CommunityController@ShowCommunity');

/*regulationのルーティング*/
Route::get('/regulations/regulation_create/{community}', 'CommunityController@CreateRegulation')->middleware('auth');
Route::post('/regulations/created', 'CommunityController@CreatedRegulation');
Route::get('/regulations/{regulation}', 'CommunityController@ShowRegulation');

/*playerのルーティング*/
Route::get('/players/player_create/{community}', 'CommunityController@CreatePlayer')->middleware('auth');
Route::get('/players/player_link/{player}', 'CommunityController@LinkPlayer');
Route::get('/players/player_show/{player}', 'CommunityController@ShowPlayer');
Route::get('/players/created/{player}', 'CommunityController@ShowPlayer');
Route::get('/players/player_user', 'CommunityController@UserPlayer')->middleware('auth');
Route::post('/players/created', 'CommunityController@CreatedPlayer');
Route::put('/players/{player}', 'CommunityController@LinkedPlayer');

/*resultのルーティング*/
Route::get('/results/result_create1', 'ResultController@create1')->middleware('auth');
Route::get('/results/result_create2', 'ResultController@create2');
Route::get('/results/result_create3', 'ResultController@create3');
Route::get('/results/result_create4/{result}', 'ResultController@create4');
Route::post('/results/result_created', 'ResultController@created');
Route::get('/results/{result}', 'ResultController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

