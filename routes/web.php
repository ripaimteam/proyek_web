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
    return view('login');
});

Auth::routes();

Route::get('/register', function () {
    return view('register');
});

Route:: get('/home', 'HomeController@home');

Route:: get('/package', 'PackageController@package');

Route:: get('/contact', 'ContactController@contact');

Route:: get('/about', 'AboutController@about');