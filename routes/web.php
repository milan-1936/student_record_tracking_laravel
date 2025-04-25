<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'show'])->name('dashboard');


Route::get('/examination', [ExamController::class, 'ShowExams'])->name('examination');


Route::get('/examination/create', function(){
    return view('dashboard.create_exam');
})->name('examination.create');

Route::get('/attendance', function(){
    return view('dashboard.attendance');
})->name('attendance');

Route::get('/search-student_profile', [StudentProfileController::class, 'getStudentProfile'])->name('search_profile');
Route::get('/student/{id}', [StudentProfileController::class, 'showStudentProfile'])->name('student_profile');

Route::get('/profile', [StudentProfileController::class, 'show'])->name('profile');

Route::get('/student', [StudentController::class, 'index'])->name('add_student');
Route::post('/student/store', [StudentController::class, 'create'])->name('student.store');

Route::get('/marks_update', [ExamController::class, 'MarkEntryShow'])->name('marks_update');
Route::post('/marks_enter', [ExamController::class, 'MarkStore'])->name('marks_enter');

Route::post('/examination/create', [ExamController::class, 'StoreExam'])->name('examination.store');
Route::get('/examination/result', [ExamController::class, 'PublishResult'])->name('result.publish');
