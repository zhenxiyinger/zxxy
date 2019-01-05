<?php

Route::get('/', function () {
    return view('welcome');
});

Route::any('/aaa', 'AaaController@aaa');
