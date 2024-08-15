<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/info2', function () {
    return view('info2');
});
Route::get('/kritiksaran', function () {
    return view('kritikSaran');
});


