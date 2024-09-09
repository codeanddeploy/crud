<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home.index');

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   

    /**
    * User Routes
    */
    Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
    });


    /**
    * Login Routes
    */
    Route::group(['prefix' => 'login'], function() {
        Route::get('/', 'LoginController@show')->name('login.show');
        Route::post('/perform', 'LoginController@perform')->name('login.perform');
    });

    /**
    * Register Routes
    */
    Route::group(['prefix' => 'register'], function() {
        Route::get('/', 'RegisterController@show')->name('register.show');
        Route::post('/perform', 'RegisterController@perform')->name('register.perform');
    });

    /**
    * Logout Route
    */
    Route::group(['prefix' => 'logout'], function() {
        Route::post('/perform', 'LogoutController@perform')->name('logout.perform');
    });
});