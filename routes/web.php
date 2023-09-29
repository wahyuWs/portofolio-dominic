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

Route::middleware('auth')->group(function() {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // routing portofolio
    Route::post('create-portofolio', [DashboardController::class, 'createPortofolio'])->name('create.portofolio');
    //routing about
    Route::post('create-about', [DashboardController::class, 'createAbout'])->name('create.about');
    //routing services
    Route::post('create-services', [DashboardController::class, 'createServices'])->name('create.services');
});
