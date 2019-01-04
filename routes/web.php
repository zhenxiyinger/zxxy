<?php

Route::get('/admin', function () {
    return view('admin.main');
});

Route::get('/', function () {
    return view('welcome');
});
