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
        Route::get('/dashboard', 'Backend\dashboardController@index')->name('dashboard');
        // Register
        Route::post('/store-register','Backend\RegisterUserController@store')->name('store-register');
        Route::get('/register-user', 'Backend\registerUserController@index')->name('register-user');
        // Jurusan
        Route::get('/jurusan', 'Backend\jurusanController@index')->name('jurusan');
        Route::post('/jurusan-store', 'Backend\jurusanController@store')->name('jurusan-store');
    });
});

Route::get('/landing-page', 'Frontend\landingPageController@index');
