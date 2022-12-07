<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitControllerr;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product-category', [HomeController::class, 'category'])->name('category');
Route::get('/product-detail', [HomeController::class, 'detail'])->name('detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  Route::get('/dashboard',[DashboarController::class, 'index'])->name('home') ;
  Route::get('/add-category', [CategoryController::class, 'index'])->name('category.add');
  Route::post('/new-category', [CategoryController::class, 'create'])->name('category.new');
  Route::get('/manage-category', [CategoryController::class, 'manage'])->name('category.manage');
  Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
  Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('category.update');
  Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('category.delete');
  // SUB CATEGORY START
    Route::get('/add-subcategory', [SubCategoryController::class, 'index'])->name('subcategory.add');
    Route::post('/create-new-sub-category', [SubCategoryController::class, 'create'])->name('sub-category.new');
    Route::get('/manage-subcategory', [SubCategoryController::class, 'manage'])->name('subcategory.manage');
//    function (){return view('dashboard');})->name('dashboard')
//    Route::get('/dashboard', [DashboarController::class, 'index'])->name('home');

    Route::get('/add-brand', [BrandController::class, 'index'])->name('brand.add');
    Route::post('/new-brand', [BrandController::class, 'create'])->name('brand.new');
    Route::get('/manage-brand', [BrandController::class, 'manage'])->name('brand.manage');
    Route::get('/edit-brand/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::post('/update-brand/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/delete-brand/{id}', [BrandController::class, 'delete'])->name('brand.delete');

    Route::get('/add-unit', [UnitControllerr::class, 'index'])->name('unit.add');
    Route::get('/mange-unit', [UnitControllerr::class, 'manage'])->name('unit.manage');
});
