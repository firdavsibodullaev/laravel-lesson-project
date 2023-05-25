<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
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
->middleware('auth')
->name('admin.index');    


Route::get('adm
in/user', [UserController::class, 'index'])
->middleware('auth')
->name('admin.index');

Route::get('admin/user/show/{id}', [UserController::class, 'show'])
->middleware('auth')
->name('admin.user.show');

Route::get('admin/user/edit/{id}', [UserController::class, 'edit'])
->middleware('auth')
->name('admin.user.edit');

Route::post('admin/user/update/{id}', [UserController::class, 'update'])
->middleware('auth')
->name('admin.user.update');

Route::get('admin/user/delete/{id}', [UserController::class, 'delete'])
->middleware('auth')
->name('admin.user.delete');

Route::get('admin/category', [CategoryController::class, 'index'])
->middleware('auth')
->name('admin.category.index');
Route::get('admin/category/create', [CategoryController::class, 'create'])
->middleware('auth')
->name('admin.category.create');
Route::post('admin/category', [CategoryController::class, 'store'])
->middleware('auth')
->name('admin.category.store');


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
