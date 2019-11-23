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

Route::get('/books', 'HomeController@indexBooks')->name('books');
Route::get('/categories', 'HomeController@indexCategory')->name('category');
Route::get('/stores', 'HomeController@indexStores')->name('stores');


Route::post('/books/create', "BookController@createBook");
Route::post('/categories/create', "CategoryController@createCategory");


Route::get('/store', "StoreController@index")->name("store.addBooks");
Route::post('/store', "StoreController@create");
