<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('blogs','BlogController');

Route::resource('jeny','jenyController');
Route::resource('theme','themeController');
Route::resource('test','TestModelController');

//Route::resource('customer','CustomerController');