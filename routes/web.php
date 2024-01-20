<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use  App\Http\Controllers\BatchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts');
});
#Student
Route::resource('/students', StudentController::class);
#Teacher
Route::resource('/teachers', TeacherController::class);
#Course
Route::resource('/courses', CourseController::class);
#Batch
Route::resource('/batches', BatchController::class);


