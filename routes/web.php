<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (!Auth::check()) {
        return view('auth.login');
    }
    return redirect(url('/backend/dashboard'));
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Backend
Route::group(['middleware' => ['auth']], function () {
    Route::prefix('backend')->group(function () {
        Route::get('/register-user', 'Backend\registerUserController@index')->name('register-user');
        Route::get('/dashboard', 'Backend\dashboardController@index')->name('dashboard');
    });
});

Route::get('/landing-page', 'Frontend\landingPageController@index');
