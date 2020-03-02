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

Route::get('/users', function () {
    return view('users');
});
Route::get('/users/add', function () {
    return view('users.create');
});
Route::get('/users/edit', function () {
    return view('users.edit');
});
Route::resource('users','AppUsersController');
