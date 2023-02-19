<?php

use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.table');
    Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/employees-list-excel', [EmployeeController::class, 'exportExcel'])->name('employees.excel');
    Route::post('/employees-import-excel', [EmployeeController::class, 'importExcel'])->name('employees.import.excel');
    //Route::post('/reset', [EmployeeController::class, 'reset'])->name('reset');

    Route::view('/profile', 'users.profile')->name('users.profile');
    Route::patch('/profile/{user}', [UserController::class, 'update'])->name('users.update');
    Route::post('/logout', [UserController::class, 'destroy'])->name('logout');
});

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [UserController::class, 'registerUser']);
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [UserController::class, 'loginUser']);
Route::view('/fotgot', 'auth.forgot-password')->name('forgot');
