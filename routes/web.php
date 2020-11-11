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

Route::get('/', 'MainController@index')->name('index');
Route::get('/aboutme', 'MainController@about')->name('aboutme');
Route::get('/sample', 'MainController@sample')->name('sample');
Route::get('/contact', 'MainController@contact')->name('contact');