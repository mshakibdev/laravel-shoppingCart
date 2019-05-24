<?php

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
    
    Route::get('/', 'ProductController@getIndex')->name('product.index');
    
    Route::group(['prefix'=>'user'],function(){
        
        //for guest
        
        Route::group(['middleware' => ['guest']], function () {
            Route::get('/signup', 'UserController@getSignUp')->name('user.signup');
            Route::post('/signup', 'UserController@postSignUp')->name('user.signup');
    
            Route::get('/signin', 'UserController@getSignIn')->name('user.signin');
            Route::post('/signin', 'UserController@postSignIn')->name('user.signin');
        });
        
        //for auth
        
        Route::group(['middleware' => ['auth']], function () {
            Route::get('/profile','UserController@getProfile')->name('user.profile');
    
            Route::get('/logout','UserController@getLogout')->name('user.logout');
        });
    
        
    });
    
   