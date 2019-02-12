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

Route::resource('masakan','masakanController');
Route::get('admin/home', 'HomeController@index')->name('home');
Route::get('order','orderController@index')->name('order');
Route::post('selectMenu/{id}','orderController@selectMenu');
// Route::get('admin/add_masakan', 'masakanController@create')->name('insertMasakan');
