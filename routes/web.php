<?php

use App\Models\Contact;
use App\Models\Gallery;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'AppController@index')->name('app.index');
    Route::get('/listings', 'AppController@listings')->name('app.listings');
    Route::get('/listing/{id?}', 'AppController@listing')->name('app.listing');
    Route::get('/about', 'AppController@about');
    Route::get('/contact/{contact}', function($contact) {
        $contact    = Contact::findOrFail($contact);
        return view('contact', ['contact' => $contact]);
    });

    Route::get('/user/{user}', function($id) {

        $user   = User::findOrFail($id);
        return view('user', ['user' => $user]);
    });

    Route::get('/gallery/{gallery}', function($id) {
        $gallery = Gallery::findOrFail($id);

        return view('gallery', ['gallery' => $gallery]);
    });
});

// Route::namespace('Dashboard')->group(function() {
//     Route::middleware('auth')->group(function() {
//         Route::prefix('dashboard')->group(function() {
//             Route::name('dashboard.')->group(function() {
//                 Route::get('/', 'DashboardController@dashboard')->name('index');
//                 Route::get('/listing/create', 'ListingController@create')->name('listing.create');
//                 Route::post('/listing', 'ListingController@store')->name('listing.store');
//             });
//         });
//     });
// });

Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth', 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/', 'DashboardController@dashboard')->name('index');
    Route::get('/listing/create', 'ListingController@create')->name('listing.create');
    Route::post('/listing', 'ListingController@store')->name('listing.store');
});

Route::prefix('auth')->group(function () {
    Route::get('/register', 'AuthController@register_form')->middleware('guest')->name('register');
    Route::post('/register', 'AuthController@register')->middleware('guest')->name('register');
    Route::get('/login', 'AuthController@login_form')->middleware('guest')->name('login');
    Route::post('/login', 'AuthController@login')->name('login');
    Route::post('/logout', 'AuthController@logout')->name('logout');
});
