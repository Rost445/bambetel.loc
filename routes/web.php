<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AssortController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CommentController;
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
Route::get('assort', [HomeController::class, 'assort'])->name('assort');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contacts', [HomeController::class, 'contacts'])->name('contacts');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('reservation', [HomeController::class, 'reservation'])->name('reservation');


//Auth, Login, Forgot And Reset Password
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'auth_login'])->name('auth_login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'create_user'])->name('create_user');
Route::get('verify/{token}', [AuthController::class, 'verify']);
Route::get('forgot-password', [AuthController::class, 'forgot'])->name('forgot');
Route::post('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot_password');
Route::get('reset/{token}', [AuthController::class, 'reset']);
Route::post('reset/{token}', [AuthController::class, 'post_reset']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




//Admin
Route::group(['middleware' => 'admin'], function () {

  Route::get('panel/user/list', [UserController::class, 'user'])->name('panel.user.list');
  Route::get('panel/user/add', [UserController::class, 'add_user'])->name('panel.user.add');
  Route::post('panel/user/add', [UserController::class, 'insert_user']);
  Route::get('panel/user/edit/{id}', [UserController::class, 'edit_user'])->name('panel.user.edit');
  Route::post('panel/user/edit/{id}', [UserController::class, 'update_user']);
  Route::get('panel/user/delete/{id}', [UserController::class, 'delete_user']);


  //Page

  Route::get('panel/page/list', [PageController::class, 'page'])->name('panel.page.list');
  Route::get('panel/page/add', [PageController::class, 'add_page'])->name('panel.page.add');
  Route::post('panel/page/add', [PageController::class, 'insert_page']);
  Route::get('panel/page/edit/{id}', [PageController::class, 'edit_page'])->name('panel.page.edit');
  Route::post('panel/page/edit/{id}', [PageController::class, 'update_page']);
  Route::get('panel/page/delete/{id}', [PageController::class, 'delete_page']);

  //Menu
  Route::get('panel/menu/list', [MenuController::class, 'menu'])->name('panel.menu.list');
  Route::get('panel/menu/add', [MenuController::class, 'add_menu'])->name('panel.menu.add');
  Route::post('panel/menu/add', [MenuController::class, 'insert_menu']);
  Route::get('panel/menu/edit/{id}', [MenuController::class, 'edit_menu'])->name('panel.menu.edit');
  Route::post('panel/menu/edit/{id}', [MenuController::class, 'update_menu']);
  Route::get('panel/menu/delete/{id}', [MenuController::class, 'delete_menu']);

  //Assortment Menu

  Route::get('panel/assort/list', [AssortController::class, 'assort'])->name('panel.assort.list');
  Route::get('panel/assort/add', [AssortController::class, 'add_assort'])->name('panel.assort.add');
  Route::post('panel/assort/add', [AssortController::class, 'insert_assort']);
  Route::get('panel/assort/edit/{id}', [AssortController::class, 'edit_assort'])->name('panel.assort.edit');
  Route::post('panel/assort/edit/{id}', [AssortController::class, 'update_assort']);
  Route::get('panel/assort/delete/{id}', [AssortController::class, 'delete_assort']);
  
});

//Adminuser
Route::group(['middleware' => 'adminuser'], function () {

  Route::get('panel/dashboard', [DashboardController::class, 'dashboard'])->name('panel.dashboard');
  Route::get('panel/comment/list', [CommentController::class, 'list'])->name('panel.comment.list');
  Route::delete('panel/comment/{id}', [CommentController::class, 'delete'])->name('panel.comment.delete');
  Route::post('assort-comment-submit', [HomeController::class, 'AssortCommentSubmit']);
  Route::post('assort-comment-reply-submit', [HomeController::class, 'AssortCommentReplySubmit']);
  Route::get('panel/change-password', [UserController::class, 'ChangePassword'])->name('panel.change_password');
  Route::post('panel/change-password', [UserController::class, 'UpdatePassword'])->name('panel.update_password');

  
  
});




// Blog Detail
Route::get('{slug}', [HomeController::class, 'assortdetail'])->name('assort_detail');
