<?php

use App\Http\Controllers\admin\DashboardController;
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

Route::get('/', function () {
    return view('main');
});

Route::post('authentication', [AuthController::class, 'authentication'])->name('authentication');
Route::get('admin', [AuthController::class, 'index'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
