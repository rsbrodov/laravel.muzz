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
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/', 'MainController@index');
Route::get('/image', 'ImageController@img');
Route::post('/image/upload', 'ImageController@upload');
Route::get('product/{id}', 'MainController@productDetail');
Route::get('/catalog/', 'CatalogController@index');
Route::get('/catalog/{id}', 'CatalogController@detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
