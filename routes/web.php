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


Route::get('/', function () {
    return view('blog');
});

Route::get('/laravel', function () {

    return view('welcome');
});

Route::group(['prefix'=>'login','namespace'=>'Auth'],function () {
    Route::get('/', 'LoginController@index');
    Route::post('/', 'LoginController@check');
});



Route::group(['prefix'=>'info','namespace'=>'System'],function () {
    Route::get('/', 'InfoController@index');
    Route::get('/list', 'InfoController@list');
    Route::post('/site', 'InfoController@site');
});
