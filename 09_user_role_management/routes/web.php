<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
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
//  ######## HOME CONTROLLER ###########
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about-us',[HomeController::class, 'about'])->name('about');
Route::get('/student-login',[HomeController::class, 'studentLogin'])->name('student.login');
Route::get('/student-register',[HomeController::class, 'studentRegister'])->name('student.register');
Route::get('/student-admission',[HomeController::class, 'studentAdmission'])->name('student.admission');

//  ######## Course CONTROLLER ###########
Route::get('/course',[CourseController::class, 'course'])->name('course');
Route::get('/course-detail',[CourseController::class, 'courseDetail'])->name('course.detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
});
