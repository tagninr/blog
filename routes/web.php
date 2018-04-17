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
    return view('frontend.home.home');
});

Route::get('home', function () {
    return view('frontend.home.home');
});

Route::get('about', function () {
    return view('frontend.about.about');
});

Route::get('contact', function () {
    return view('frontend.contact.contact');
});

Route::group(['as' => 'frontend', 'namespace' => 'Frontend'], function(){
	Route::get('', 'HomeController@index');
	Route::get('post-details/{id}', 'HomeController@postDetails')->name('post-details');
});

// Route::get('post-details/{id}', [
// 	'as' => 'post-details',
// 	'namespace' => 'Frontend',
// 	'uses' => 'HomeController@postDetails' ->name('post-details')
// ]);