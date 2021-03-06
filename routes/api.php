<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('user/detalle','UserController@detalle');
Route::post('user/team','UserController@team');
Route::post('user/shards','UserController@shards');
Route::post('user/region_progress','UserController@region_progress');
Route::post('user/city_progress','UserController@city_progress');
Route::post('user/stage_progress','UserController@stage_progress');


Route::get('tipos','TiposController@get');
