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

Route::get('/Register', function () {
    return view('register');
});

Route:: get('/welcome', 'WelcomeController@welcome');

Route:: get('/package', 'PackageController@package');

Route:: get('/contact', 'ContactController@contact');

Route:: get('/about', 'AboutController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
