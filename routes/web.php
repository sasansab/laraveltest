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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::resource('/admin','RegisterMotor');
    //
});



Route::get('/index','RegisterMotor@indexUser');
Route::get('/details/{id}','RegisterMotor@showDetail')->name('details');
Route::get('index/{id}','RegisterMotor@showSorted')->name('sort');




