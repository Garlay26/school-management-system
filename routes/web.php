<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/new-student', [StudentController::class, 'create'])->name('new-student');
Route::post('/register-student', [StudentController::class, 'store'])->name('register-student');

Route::get('/teacher',[TeacherController::class,'index'])->name('teacher');





