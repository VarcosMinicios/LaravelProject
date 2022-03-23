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

Route::middleware(['web'])->group(function () {
    Route::get('/', 'App\Http\Controllers\Site\HomeController')->name('site.home');

    Route::get('/list', 'App\Http\Controllers\Site\ListController@index');

    Route::get('/register', 'App\Http\Controllers\Site\RegisterController@index');
    Route::post('/register', 'App\Http\Controllers\Site\RegisterController@form')->name('site.form');
});
