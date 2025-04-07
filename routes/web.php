<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
});


Route::get('/examination', function(){
    return view('dashboard.examination');
});


Route::get('/examination/create', function(){
    return view('dashboard.create_exam');
});
