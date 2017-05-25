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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/create',['uses'=>'CategoryController@create'])->name('categoryCreate');
Route::get('/category/list',['uses'=>'CategoryController@index'])->name('categoryList');
Route::get('/category/edit',['uses'=>'CategoryController@edit'])->name('categoryEdit');