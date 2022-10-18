<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DeshboardContoraller;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\StudentAuthControler;
use App\Http\Controllers\StudentDashbordControler;
use App\Http\Controllers\TeacherEnrollController;
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

Route::get('/send-mail',[HomeController::class, 'sendMail']);

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/about-us',[HomeController::class, 'about'])->name('about');
Route::get('/all-courses',[HomeController::class, 'courses'])->name('courses');
Route::get('/course-detail/{id}',[HomeController::class, 'detail'])->name('detail');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/login-registration',[HomeController::class, 'auth'])->name('login-registration');
Route::get('/enroll-now/{id}',[EnrollController::class, 'index'])->name('enroll-now');
Route::post('/new-enroll/{id}',[EnrollController::class, 'enroll'])->name('enroll.new');

Route::get('/teacher/login',[TeacherAuthController::class, 'login'])->name('teacher.login');
Route::post('/teacher/login',[TeacherAuthController::class, 'loginCheck'])->name('teacher.login');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DeshboardContoraller::class,'index'])->name('dashboard');
    Route::get('/add-teacher',[TeacherController::class,'index'])->name('teacher.add');
    Route::post('/teacher/create',[TeacherController::class,'create'])->name('teacher.create');
    Route::get('teacher/manage',[TeacherController::class,'manage'])->name('teacher.manage');
    Route::get('teacher/edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
    Route::post('teacher/update/{id}',[TeacherController::class,'update'])->name('teacher.update');
    Route::get('teacher/delete/{id}',[TeacherController::class,'delete'])->name('teacher.delete');
    Route::get('admin/manage-course',[AdminController::class,'courseManage'])->name('admin.manage-course');
    Route::get('admin/manage-offer',[AdminController::class,'manageOffer'])->name('admin.manage-offer');
    Route::post('admin/create-course-offer/',[AdminController::class,'createOffer'])->name('admin.create-course-offer');
    Route::get('admin/edit-course-offer/{id}',[AdminController::class,'editOffer'])->name('admin.course-offer-edit');
    Route::post('admin/course-update/',[AdminController::class,'updateOffer'])->name('admin.course-offer-update');
    Route::get('admin/course-detail/{id}',[AdminController::class,'courseDetail'])->name('admin.course-detail');
    Route::get('admin/course-status/{id}',[AdminController::class,'courseStatus'])->name('admin.course-status');
    Route::get('admin/manage-enroll',[AdminController::class,'manageEnroll'])->name('manage-enroll');
    Route::get('admin/update-enroll/{id}',[AdminController::class,'updateEnroll'])->name('admin.update-enroll-status');

});


Route::post('/student/login',[StudentAuthControler::class,'login'])->name('student-login');

Route::middleware(['student'])->group(function (){
    Route::get('/student/dashboard',[StudentDashbordControler::class,'index'])->name('student-dashboard');
    Route::get('/student/profile',[StudentDashbordControler::class,'profile'])->name('student-profile');
    Route::post('/student/update/{id}',[StudentDashbordControler::class,'update'])->name('update-student');
    Route::get('/student/course',[StudentDashbordControler::class,'course'])->name('student-course');
    Route::get('/student/logout',[StudentAuthControler::class,'logout'])->name('student-logout');
});

Route::middleware(['teacher'])->group(function(){
    Route::post('/teacher/logout',[TeacherAuthController::class, 'logout'])->name('teacher.logout');
    Route::get('/teacher/dashboard',[TeacherDashboardController::class, 'index'])->name('teacher.dashboard');
    Route::get('/course/add',[CourseController::class, 'index'])->name('course.add');
    Route::post('/course/create',[CourseController::class, 'create'])->name('course.create');
    Route::get('/course/manage',[CourseController::class, 'manage'])->name('course.manage');
    Route::get('/course/detail/{id}',[CourseController::class, 'detail'])->name('course.detail');
    Route::get('/course/edit/{id}',[CourseController::class, 'edit'])->name('course.edit');
    Route::post('/course/update/{id}',[CourseController::class, 'update'])->name('course.update');
    Route::get('/course/delete/{id}',[CourseController::class, 'delete'])->name('course.delete');
    Route::get('teacher/manage-enroll',[TeacherEnrollController::class,'manage'])->name('teacher.manage-enroll');
});
