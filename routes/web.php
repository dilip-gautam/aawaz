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


Route::get('/','PostController@index')->name('blog');
Route::resource('post', 'PostController');
Route::get('/category/{category}','PostController@category')->name('category');
Route::get('/author/{author}','PostCOntroller@author')->name('author');
Auth::routes();
Route::get('/home', 'Backend\HomeController@index')->name('home');
Route::resource('/backend/blog', 'Backend\BlogController');
