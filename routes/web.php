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

Route::get('/', function () {
    return view('layout');
});
Route::view('accueil', 'accueil')->name('accueil');

Route::get('contact/', 'ContactController@index')->name('contact.index');
Route::get('contact/create', 'ContactController@create')->name('contact.create');
Route::post('contact', 'ContactController@store');
Route::get('contact/{id}', 'ContactController@show');
Route::get('contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
Route::patch('contact/{id}', 'ContactController@update');
Route::delete('contact/{id}', 'ContactController@destroy');

Route::get('search', 'SearchController@index')->name('partials.search');