<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[BlogController::class,'blog']);

Route::get('/category/{id}',[BlogController::class,'category']);

// AUTH
Route::get('/login',[LoginController::class,'show'])->name('login');

Route::post('/login-process',[LoginController::class,'login']);

Route::get('/register',[RegisterController::class,'show']);

Route::post('/register-process',[RegisterController::class,'register']);

Route::get('/logout',[LoginController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    // DASHBOARD
    // ADMIN
    Route::get('/dashboard/admin',[AdminDashboardController::class,'show']);
    
    Route::get('/dashboard/admin/post',[AdminPostController::class,'adminPost']);
    
    Route::get('/dashboard/admin/post/add',[AdminPostController::class,'addAdminPost']);
    
    Route::post('/add-admin-post',[AdminPostController::class,'processAddAdminPost']);
    
    Route::get('/dashboard/admin/post/edit',[AdminPostController::class,'editAdminPost']);
    
    Route::post('/edit-admin-post',[AdminPostController::class,'processEditAdminPost']);

    Route::post('/delete-admin-post',[AdminPostController::class,'deleteAdminPost']);

    // User Post
    Route::get('/dashboard/admin/user-post',[AdminPostController::class,'userPost']);

    Route::get('/dashboard/admin/user-post/detail',[AdminPostController::class,'detailUserPost']);

    Route::post('/save-user-post',[AdminPostController::class,'saveUserPost']);

    Route::post('/delete-user-post',[AdminPostController::class,'deleteUserPost']);
    
    
    // USER
    Route::get('/dashboard/user',[UserDashboardController::class,'show']);

    Route::get('/dashboard/user/post',[UserPostController::class,'post']);
    
    Route::get('/dashboard/user/post/add',[UserPostController::class,'addPost']);
    
    Route::post('/add-user-post',[UserPostController::class,'processAddPost']);
    
    Route::get('/dashboard/user/post/edit',[UserPostController::class,'editPost']);
    
    Route::post('/edit-user-post',[UserPostController::class,'processEditPost']);

    Route::post('/delete-user-post',[UserPostController::class,'deletePost']);
});