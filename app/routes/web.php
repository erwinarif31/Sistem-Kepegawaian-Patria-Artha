<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['prefix' => '', 'namespace' => 'App\Http\Controllers\Auth'], function(){
    Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
    Route::post('/login', 'LoginController@login')->name('login.post');
    Route::post('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'user', 'namespace' => 'App\Http\Controllers\User'], function(){
    Route::get('/', 'HomeController@index')->name('user.home')->middleware('auth');

    // Route::group(['prefix' => 'profile'], function(){
    //     Route::get('/data-pribadi', '')
    // });
});
