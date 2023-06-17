<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('layouts.dashboard');
});

// AUTH
Route::get('/login',[LoginController::class,'show']);

Route::post('/login-process',[LoginController::class,'login']);

Route::get('/register',[RegisterController::class,'show']);

Route::post('/register-process',[RegisterController::class,'register']);