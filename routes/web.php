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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect() ->back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tapes', 'tapesController@index')->name('tapes');
Route::get('/snippets', 'snippetsController@index')->name('snippets');
Route::get('/about', 'aboutController@index')->name('about');
Route::get('/downloads', 'downloadsController@index')->name('downloads');
Route::get('/link-submission', 'postController@index')->name('postLink');
Route::get('/permissions', 'Auth\PermissionController@index')->name('index');
Route::resource('posts', 'FileController');
