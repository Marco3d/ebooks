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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'FrontController@index');


Auth::routes();
Route::get('register', 'Auth\LoginController@showLoginForm')->name('register');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('authors', 'AuthorController');




Route::resource('books', 'BookController');
Route::get('/sbooks/{id}', 'FrontController@showBooks')->name('sbook');
Route::get('/sauthors/{id}', 'FrontController@showAuthors')->name('sauthor');
Route::get('/pbooks', 'FrontController@index2')->name('pbooks');
Route::get('/pauthors', 'FrontController@index3')->name('pauthors');
