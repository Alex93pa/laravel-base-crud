<?php

use Illuminate\Support\Facades\Route;

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



//
Route::get('/','ComicController@index')->name('index');


//rotta che mostra il form
Route::get('/comics/create','ComicController@create')->name('create');

//
Route::post('comics/store', 'ComicController@store')->name('store');

//
Route::get('comics/{id}/edit', 'ComicController@edit')->name('edit');

//
Route::delete('/comics/{id}', 'ComicController@destroy')->name('destroy');

//mostra i dettagli di un solo fumetto
Route::get('/comics/{id}','ComicController@show')->name('show');