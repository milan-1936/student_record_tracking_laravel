<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('dashboard');


Route::get('/examination', function(){
    return view('dashboard.examination');
})->name('examination');


Route::get('/examination/create', function(){
    return view('dashboard.create_exam');
})->name('examination.create');

Route::get('/attendance', function(){
    return view('dashboard.attendance');
})->name('attendance');

Route::get('/profile', function(){
    return view('dashboard.student_profile');
})->name('profile');
