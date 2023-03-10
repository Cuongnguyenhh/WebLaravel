<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
//frontend routes
Route::get('/',[HomeController::class,'index'] );

Route::get('/home',[HomeController::class,'index'] );
Route::get('/shop',[HomeController::class,'shop'] );


//backend routes
Route::get('/admin_login',[AdminController::class,'index'] );
Route::get('/dashboard',[AdminController::class,'showAdmin']);
Route::post('/admin_dashboard',[AdminController::class,'dashboard']);
Route::get('/logout',[AdminController::class,'logout'] );


//Category Route
Route::get('/add-category-product',[CategoryProductController::class, 'showAddcategoryProduct']);
Route::get('/all-category-product',[CategoryProductController::class, 'showAllCategoryProduct']);
Route::post('/save_category_product',[CategoryProductController::class, 'addCategoryProduct']);