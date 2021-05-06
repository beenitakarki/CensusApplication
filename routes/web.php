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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::resource('/users', 'UserController');

Route::get('/users/signup', function() {
    return view('users.create');
});

Route::get('/users/login', function() {
    return view('users.login');
});

Route::get('/users/form', function() {
    return view('users.form');
});