<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['can:view,App\User'], 'prefix' => 'dashboard'], function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('users', 'AdminController')->except(['show']);
    Route::get('/deleteUser/{id}', 'AdminController@destroy')->name('destroy');
    // Post controller 
    Route::resource('posts', 'PostController')->except(['show']);
    Route::resource('pages', 'PageController')->except(['show']);
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/edit', 'SettingController@edit')->name('edit');
        Route::put('/update/{id}', 'SettingController@update')->name('update');
    });
});
