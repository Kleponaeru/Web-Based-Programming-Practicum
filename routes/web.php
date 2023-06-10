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

Route::get('/index', function () {
    return view('index');
});
Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'PageController@home');
Route::get('/account', 'PageController@account');
Route::get('/product', 'PageController@product');
Route::get('/reporting', 'PageController@reporting');

Route::get('/home/search', 'PageController@search');
Route::get('/home/formadd', 'PageController@formadd');
Route::post('/home/save', 'PageController@save');
Route::get('/home/formedit/{id}', 'PageController@formedit');
Route::put('/home/update/{id}', 'PageController@update');
Route::get('/home/delete/{id}', 'PageController@delete');

Route::get('/logout', 'AuthController@logout');
});
Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/', 'AuthController@login')->name('login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
});


