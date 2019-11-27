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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list', 'ListController@index')->name('list');
Route::post('/home', 'HomeController@scraping')->name('home');
Route::post('/save', 'SaveController@index')->name('save');
Route::post('/edit', 'EditController@update')->name('edit');
Route::get('/edit/{id}', 'EditController@edit');
Route::get('/delete/{id}', 'EditController@delete');
Route::get('/detail/{id}', 'DetailController@show');
