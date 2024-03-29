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
Route::get('/create', 'HomeController@create')->name('create');
Route::post('/store', 'HomeController@store')->name('store');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::DELETE('/destroy/{id}', 'HomeController@destroy')->name('destroy');
Route::put('/update/{id}', 'HomeController@update')->name('update');
//Route::post('/update/{id}', 'HomeController@update');
// Route::get('my-datatables', 'MyDatatablesController@index');
//
// Route::get('get-data-my-datatables', ['as'=>'get.data','uses'=>'MyDatatablesController@getData']);
