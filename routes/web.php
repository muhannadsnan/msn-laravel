<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/cats', 'CategoriesController');
Route::resource('/products', 'ProductsController');
