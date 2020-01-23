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

Route::get('/', 'GuestController@index')->name('base');
Route::get('/post/delete/{id}', 'GuestController@postDelete')->name('post.delete');

Route::get('/home', 'HomeController@index')->name('home');
