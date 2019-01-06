<?php

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return view('admin.master');
    });

    Route::prefix('public')->group(function () {
        Route::post('login', 'PublicController@login');
        Route::get('info', 'PublicController@info');
        Route::post('logout', 'PublicController@logout');
    });

    Route::prefix('auth_admins')->group(function () {
        Route::get('index', 'AuthAdminsController@index');
    });
});
