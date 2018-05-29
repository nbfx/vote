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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/github', 'Auth\LoginController@redirectToProviderGithub')->name('githubRedirect');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallbackGithub')->name('githubCallback');

Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle')->name('googleRedirect');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle')->name('googleCallback');
