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
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth'
], function() {

    Route::get('', [MainController::class, 'index'])->name('index');    

    Route::group([
        'prefix' => 'user',
        'as' => 'user.'
    ], function () {
        Route::get('', [UserController::class, 'index'])->name('index');
        
        Route::get('show/{id}', [UserController::class, 'show'])->name('show');
        
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
        
        Route::post('update/{id}', [UserController::class, 'update'])->name('update');
        
        Route::get('delete/{id}', [UserController::class, 'delete'])->name('delete');
    });
    
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category', [CategoryController::class, 'store'])->name('category.store');
});


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
