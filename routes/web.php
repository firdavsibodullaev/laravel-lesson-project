<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\UserController;
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

Route::get('admin', [MainController::class, 'index'])
->name('admin')
->middleware('auth');

Route::get('admin/user', [UserController::class, 'index'])
->name('admin.user.index')
->middleware('auth');

Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])
->name('admin.user.edit')
->middleware('auth');

Route::post('admin/user/update/{id}', [UserController::class, 'update'])
->name('admin.user.update')
->middleware('auth');

Route::get('admin/user/delete/{id}', [UserController::class, 'delete'])
->name('admin.user.delete')
->middleware('auth');

Route::get('login', [LoginController::class, 'showLoginForm'])
->name('showLoginForm')
->middleware('guest');

Route::post('login', [LoginController::class, 'login'])
->name('login')
->middleware('guest');

Route::get('logout', [LoginController::class, 'logout'])
->middleware('auth')
->name('logout');

Route::get('register', [RegisterController::class, 'showRegisterForm'])
->middleware('guest')
->name('showRegisterForm');

Route::post('register', [RegisterController::class, 'register'])
->middleware('guest')
->name('registerUser');
