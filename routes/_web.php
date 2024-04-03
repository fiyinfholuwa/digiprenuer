<?php

use App\Http\Controllers\Auth\UserLogin;
use App\Http\Controllers\Auth\UserRegister;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserLogin::class, 'index']);
Route::get('/pre_register', [UserRegister::class, 'pre_register'])->name('pre_register');
Route::get('/complete_register', [UserRegister::class, 'complete_register'])->name('complete_register');
Route::get('/activation', [UserRegister::class, 'activation'])->name('activation');

Route::post('/login', [UserLogin::class, 'login'])->name('login');
Route::post('/pregister', [UserRegister::class, 'pregister'])->name('pregister');
Route::post('/cregister', [UserRegister::class, 'cregister'])->name('cregister');
Route::post('/activate', [UserRegister::class, 'activate'])->name('activate');


Route::get('/home', [HomeController::class, 'index'])->name('home')
;