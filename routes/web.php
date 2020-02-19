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

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('/', 'HomeController@admin')->name('admin');
});

Route::group(['prefix'=>'seller','middleware'=>['auth','seller']],function(){
    Route::get('/','HomeController@admin')->name('seller');
});

Route::group(['prefix'=>'user','middleware'=>['auth','user']],function(){
    Route::get('/','HomeController@admin')->name('user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
