<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Dashboard@index');

Route::get('/product/create', 'Product@create');
Route::get('/product','Product@index');
Route::post('/product/store/{id}', 'Product@store');
Route::delete('/product/store/{id}', 'Product@store');
Route::get('/product/disactivate/{id}', 'Product@disactivate');


Route::get('/category', 'Category@index')->name('category');
Route::get('/category/create', 'Category@create')->name('create_category');
Route::post('/category/store', 'Category@store')->name('store_category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/transaction', 'Transaction@index')->name('transaction');
