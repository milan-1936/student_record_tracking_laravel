<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'show'])->name('dashboard');


Route::get('/examination', [ExamController::class, 'ShowExams'])->name('examination');


Route::get('/examination/create', function(){
    return view('dashboard.create_exam');
})->name('examination.create');

Route::get('/attendance', function(){
    return view('dashboard.attendance');
})->name('attendance');

Route::get('/profile', function(){
    return view('dashboard.student_profile');
})->name('profile');

Route::get('/student', [StudentController::class, 'index'])->name('add_student');
Route::post('/student/store', [StudentController::class, 'create'])->name('student.store');

Route::get('/marks_update', [ExamController::class, 'MarkEntryShow'])->name('marks_update');


Route::post('/examination/create', [ExamController::class, 'StoreExam'])->name('examination.store');
