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

// front page link route path start
    Route::get('/', 'LinkController@welcome')->name('/');
    Route::get('people', 'LinkController@people')->name('people');
    Route::get('profile', 'LinkController@profile')->name('profile');
    Route::get('project', 'LinkController@project')->name('project');
    Route::get('about', 'LinkController@about')->name('about');
    Route::get('contact', 'LinkController@contact')->name('contact');
// front page link route path end

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
