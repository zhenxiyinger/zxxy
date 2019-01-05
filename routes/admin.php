<?php

Route::group(['namespace' => 'Admin'], function () {
    Route::get('/', function () {
        return view('admin.master');
    });

    Route::prefix('public')->group(function () {
        Route::post('login', 'PublicController@login');
    });
});
