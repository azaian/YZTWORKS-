<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {




    Route::group(['middleware' => ['auth', 'admin']], function () {
        //admin routes
        Route::Controller('/admin', 'AdminController');
    });
    Route::group(['middleware' => ['auth']], function () {
        //admin routes
        Route::Controller('/profile', 'ProfileController');
    });
    
    //user routes
    Route::auth();
    Route::Controller('/', 'HomeController');

});




