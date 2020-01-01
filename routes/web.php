<?php

use Illuminate\Http\Request;

Route::namespace('Frontend')->group(function() {
    Route::get('/', 'AppController@index')->name('app.index');
    Route::get('/listings', 'AppController@listings')->name('app.listings');
    Route::get('/listing/{id?}', 'AppController@listing')->name('app.listing');
    Route::get('/about', 'AppController@about');
    Route::get('/dashboard', 'AppController@dashboard')->middleware('auth')->name('dashboard');
});

Route::prefix('auth')->group(function() {
    Route::get('/register', 'AuthController@register_form')->middleware('guest')->name('register');
    Route::post('/register', 'AuthController@register')->middleware('guest')->name('register');
    Route::get('/login', 'AuthController@login_form')->middleware('guest')->name('login');
    Route::post('/login', 'AuthController@login')->name('login');
    Route::post('/logout', 'AuthController@logout')->name('logout');
});

