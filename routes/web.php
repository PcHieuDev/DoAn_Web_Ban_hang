<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\UserController;
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

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'processLogin'])->name('process_login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'processRegister'])->name('process_register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('Chitiet', [SanphamController::class, 'Chitiet'])->name('Chitiet');
Route::get('admin', [UserController::class, 'index'])->name('user.index');
Route::get('/gioithieu', [HomeController::class, 'gioithieu'])->name('gioithieu');



