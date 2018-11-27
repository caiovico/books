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
// Standard
Route::get('home', 'BookController@index')->name('home');

// Book Routes
Route::get('book', 'BookController@index')->name('book.index');
Route::get('book/create', 'BookController@create')->name('book.create');

// Author Routes
Route::get('author', 'AuthorController@index')->name('author.index');
Route::get('author/create', 'AuthorController@create')->name('author.create');
Route::post('author/store', 'AuthorController@store')->name('author.store');
Route::get('author/edit/{id}', 'AuthorController@edit')->name('author.edit');
Route::post('author/update', 'AuthorController@update')->name('author.update');
Route::post('author/destroy', 'AuthorController@destroy')->name('author.destroy');
Route::get('author/show/{id}', 'AuthorController@show')->name('author.show');