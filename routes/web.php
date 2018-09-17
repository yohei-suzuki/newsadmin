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
    Route::delete('{id}', 'AdminNewsController@destroy')->name('news.destroy');
    
    //Route::resource('/', 'AdminNewsController');
});

Route::prefix('newscate')->group(function() {
   Route::get('', 'NewsCategoryController@index')->name('newscate.index'); 
   Route::get('create', 'NewsCategoryController@create')->name('newscate.create');
   Route::post('store', 'NewsCategoryController@store')->name('newscate.store');
   Route::get('{id}/edit', 'NewsCategoryController@edit')->name('newscate.edit');
   Route::put('{id}' ,'NewsCategoryController@update')->name('newscate.update');
   Route::delete('{id}', 'NewsCategoryController@destroy')->name('newscate.destroy');
});

Route::prefix('newsrepo')->group(function() {
   Route::get('', 'NewsRepoterController@index')->name('newsrepo.index'); 
   Route::get('create', 'NewsRepoterController@create')->name('newsrepo.create');
   Route::post('store', 'NewsRepoterController@store')->name('newsrepo.store');
   Route::get('{id}/edit', 'NewsRepoterController@edit')->name('newsrepo.edit');
   Route::put('{id}' ,'NewsRepoterController@update')->name('newsrepo.update');
   Route::delete('{id}', 'NewsRepoterController@destroy')->name('newsrepo.destroy');
});