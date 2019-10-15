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
Route::get('main', 'MainController@index');
Route::get('/image', 'ImageController@img');
Route::post('/image/upload', 'ImageController@upload');
Route::get('product/{id}', 'MainController@productDetail');
Route::get('/catalog/', 'CatalogController@index');
Route::get('/catalog/{id}', 'CatalogController@detail');

Route::get('/admin', function () {
    return 'You are admin';
})->middleware(['auth', 'auth.admin']);//midleware означает права доступа описанные в Kernel доступ имееют авторизир админ(аузадмин это класс мидлуэр в нем мы указали роли которые имеют доступ)


Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
	Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
	Route::resource('/catalog', 'CatalogController');
	Route::resource('/product', 'ProductController');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
