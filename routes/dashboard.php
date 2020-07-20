<?php
use Illuminate\Support\Facades\Route;

    Route::group(['middleware' => ['can:view,App\User'], 'prefix' => 'dashboard'], function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('users', 'AdminController')->except(['show']);
    Route::get('/deleteUser/{id}', 'AdminController@destroy')->name('destroy');
    // Post controller 
    Route::resource('posts', 'PostController')->except(['show']);

}); 