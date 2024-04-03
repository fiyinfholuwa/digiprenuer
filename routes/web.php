<?php

use App\Http\Controllers\Auth\UserLogin;
use App\Http\Controllers\Auth\UserRegister;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [UserLogin::class, 'login'])->name('login');
Route::get('/redirect', [AuthController::class, 'check_login'])->middleware('auth');
Route::get('/login', [UserLogin::class, 'index']);
// Route::get('/pre_registration', [UserRegister::class, 'pre_register'])->name('pre_register');
Route::get('/pre_registration/{referral?}', [UserRegister::class, 'pre_register'])->name('pre_register');
Route::get('/complete_registration', [UserRegister::class, 'complete_register'])->name('complete_register');
Route::get('/account_activation', [UserRegister::class, 'activation'])->name('activation');

Route::post('/login', [UserLogin::class, 'login'])->name('login');
Route::post('/pregister', [UserRegister::class, 'pregister'])->name('pregister');
Route::post('/cregister', [UserRegister::class, 'cregister'])->name('cregister');
Route::post('/activate', [UserRegister::class, 'activate'])->name('activate');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'user_dashboard'])->name('user.dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
    Route::get('/logout', [UserLogin::class, 'logout'])->name('logout');

    Route::controller(\App\Http\Controllers\TaskController::class)->group(function () {
        Route::get('/admin/task/view', 'admin_task_view')->name('admin.task.view');
        Route::post('/admin/task/add', 'task_add')->name('task.add');
        Route::post('/admin/task/delete/{id}', 'task_delete')->name('task.delete');
        Route::get('/admin/task/edit/{id}', 'task_edit')->name('task.edit');
        Route::post('/admin/task/update/{id}', 'task_update')->name('task.update');
    });

});
