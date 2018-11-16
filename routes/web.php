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
    $posts = \App\input::orderBy('updated_at', 'desc')->get();
    return view('welcome', compact('posts'));
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/edit', 'HomeController@index')->name('edit')->middleware('auth');
Route::resource('posts', 'PostController')->middleware('auth');
