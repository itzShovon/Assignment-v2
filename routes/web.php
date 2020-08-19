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

// Route::get('/', function () {
//     return view('welcome');
// });

// Custom Route
// Route::get('/', 'PagesController@index')->name('home');
Route::get('/{any}', 'PagesController@index')->where('any', '.*')->name('home');
// Route::get('/login', 'AuthsController@index')->name('login');
