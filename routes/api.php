<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//PLAYER
Route::post('player', 'Player\PlayerController@store');
Route::put('player/{player}', 'Player\PlayerController@update');

//TEAM
Route::post('team', 'Team\TeamController@store');
Route::get('team/{team}/players', 'Team\TeamController@players');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
