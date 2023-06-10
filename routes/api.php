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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/task/read', 'TaskApiController@read');
Route::post('/task/create', 'TaskApiController@create');
Route::post('/task/update', 'TaskApiController@update');
Route::post('/task/update/{id}', 'TaskApiController@update');
Route::delete('/task/delete/{id}', 'TaskApiController@delete');
