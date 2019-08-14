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
    return view('welcome');
});

Route::group(
    ['prefix' => 'users', 'as' => 'users.'],
    function () {
        Route::get('/', 'UserController@index')->name('master')->middleware('auth');
        // Route::get('class', 'AdminController@indexClass')->name('class');
        Route::get('login', 'UserController@getLogin')->name('getLogin');
        Route::post('post-login', 'UserController@postLogin')->name('postLogin');
        Route::get('logout', 'UserController@logout')->name('logout');
        Route::get('pro', 'UserController@pro')->name('pro')->middleware(['auth','check.active']);
        Route::get('list', 'UserController@list')->name('list')->middleware(['auth','check.active']);
        Route::get('add', 'UserController@createForm')->name('add')->middleware(['auth','check.active']);
        Route::post('create-post', 'UserController@create')->name('create-post')->middleware(['auth','check.active']);
        Route::get('{user}/edit', 'UserController@editForm')->name('edit')->middleware(['auth','check.active']);
        Route::post('update-post', 'UserController@update')->name('update')->middleware(['auth','check.active']);

    }
);

