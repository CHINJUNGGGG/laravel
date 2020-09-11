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

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('gmail');
Route::get('callback/google', 'Auth\LoginController@handleGoogleCallback');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('facebook');
Route::get('callback/facebook', 'Auth\LoginController@handleFacebookCallback');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


