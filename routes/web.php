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

//Route::get('/admin', 'HomeController@index')->name('home');

// Authentication Routes...
$this->get('register', 'Auth\RegisterController@register')->name('auth.register');
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::group(['prefix' => 'admin', 'as' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'HomeController@index']);
});

// Auth::routes();

// Route::get('/admin', 'HomeController@index')->name('home');