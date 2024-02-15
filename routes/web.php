<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\AdminauthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\LifestyleController;
use App\Http\Controllers\FashionController;

// Home view 

Route::get ('/',[HomeController::class, 'home'])->name('home');
Route::get ('/post',[HomeController::class, 'post'])->name('post');

//Auth view Login view
Route::get ('/auth',[AuthController::class, 'auth'])->name('auth');
Route::get ('/login',[LoginController::class, 'login'])->name('login');

// Header 
Route::get ('/news',[NewsController::class, 'news'])->name('news');
Route::get ('/sport',[SportController::class, 'sport'])->name('sport');
Route::get ('/lifestyle',[LifestyleController::class, 'lifestyle'])->name('lifestyle');
Route::get ('/fashion',[FashionController::class, 'fashion'])->name('fashion');

//Auth view || Login view
Route::get ('/auth',[AuthController::class, 'auth'])->name('auth');
Route::get ('/login',[LoginController::class, 'login'])->name('login');

//Save auth
Route::post ('/auth/save', [AuthController::class, 'save']) -> name ('auth-save');

//Sign-in

Route::post ('/login/signin', [LoginController::class, 'signin'])->name ('signin');

//Private page

Route::get ('/private', [LoginController::class, 'private'])->name ('private');

// Products page
Route::get ('/products', [HomeController::class, 'products'])->name ('products');

// save products
Route::post ('/products', [HomeController::class, 'save']) -> name ('auth-save1');




Route::get ('/error', [AdminController::class, 'error'])->name ('error');
Route::get ('/blank', [AdminController::class, 'blank'])->name ('blank');
Route::get ('/buttons', [AdminController::class, 'buttons'])->name ('buttons');
Route::get ('/cards', [AdminController::class, 'cards'])->name ('cards');
Route::get ('/forgot-password', [AdminController::class, 'forgot_password'])->name ('forgot-password');
Route::get ('/panel', [AdminController::class, 'admin_panel'])->name ('admin-panel');
Route::get ('/tables', [AdminController::class, 'tables'])->name ('tables');
Route::get ('/animation', [AdminController::class, 'animation'])->name ('animation');
Route::get ('/broder', [AdminController::class, 'border'])->name ('border');
Route::get ('/color', [AdminController::class, 'color'])->name ('color');
Route::get ('/other', [AdminController::class, 'other'])->name ('other');

Route::get ('/panel/logout', [AdminController::class, 'logout'])->name ('panel-logout');



