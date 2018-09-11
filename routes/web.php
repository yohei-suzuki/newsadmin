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

//Route::prefix('news')->group(function() {
//Route::group(['middleware' => ['auth']], function () {
Route::prefix('news')->group(function() {
    Route::get('/', 'AdminNewsController@index')->name('news.index');
    Route::get('/{id}', 'AdminNewsController@show')->name('news.show');
    Route::get('/create', 'AdminNewsController@show')->name('news.create');
    Route::get('/edit/{id}', 'AdminNewsController@edit')->name('news.edit');
});
//});