<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'account'],function(){

    Route::get('/profile', function() {

        return"profile";
    });

    Route::get('/login', function() {
        return"login";

    });

    Route::get('/logout', function() {
        return"logout";

    });

    Route::get('/signup', function() {
        return"signup";

    });

    Route::get('/updateprofile', function() {
        return"updateprofile";

    });

});



