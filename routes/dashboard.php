<?php
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->group(function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('users', 'AdminController')->except(['show']);
    Route::get('/deleteUser/{id}', 'AdminController@destroy')->name('destroy');
            
});