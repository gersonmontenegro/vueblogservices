<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::post('posts/get/all', 'Admin\AdminController@getData');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::post('logout', 'AuthController@logout');
        Route::post('user', 'AuthController@user');
        Route::post('posts/edit', 'Admin\AdminController@editData');
	    Route::post('posts/add', 'Admin\AdminController@addData');
	    Route::post('posts/remove', 'Admin\AdminController@removeData');
    });
});