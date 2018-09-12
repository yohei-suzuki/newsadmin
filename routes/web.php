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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('news')->group(function() {
    Route::get('', 'AdminNewsController@index')->name('news.index');
    Route::get('create', 'AdminNewsController@create')->name('news.create');
    Route::post('store', 'AdminNewsController@store')->name('news.store');
    Route::get('{id}', 'AdminNewsController@show')->name('news.show');
    Route::get('{id}/edit', 'AdminNewsController@edit')->name('news.edit');
    Route::put('{id}' ,'AdminNewsController@update')->name('news.update');
    
    //Route::resource('/', 'AdminNewsController');
});