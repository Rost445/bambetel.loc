<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

//Pages
Route::get('/', [HomeController::class, 'home'])->name('home');

//Auth, Login, Forgot And Reset Password
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth_login'])->name('auth_login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'create_user'])->name('create_user');
Route::get('verify/{token}', [AuthController::class, 'verify']);
Route::get('forgot-password', [AuthController::class, 'forgot'])->name('forgot');

/* 
Route::post('login', [AuthController::class, 'auth_login'])->name('auth_login');
Route::post('register', [AuthController::class, 'create_user'])->name('create_user');
Route::get('verify/{token}', [AuthController::class, 'verify']);
Route::post('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot_password');
Route::get('forgot-password', [AuthController::class, 'forgot'])->name('forgot');
Route::post('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot_password');
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'post_reset']);
Route::get('logout', [AuthController::class, 'logout']);
 */