<?php

use Illuminate\Support\Facades\Route;
use App\Models\N1;
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

Auth::routes();

// logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('landing-pages/index');
});

// cuma bisa diakses kalo udah login
Route::middleware(['auth', 'active'])->group(function () {
    // tambahin route baru didalam sini kalo perlu login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/calendar', [App\Http\Controllers\FullCalendarController::class, 'index'])->name('calendar');
    Route::get('/test-n1', [App\Http\Controllers\CalculatorController::class, 'test_n1'])->name('test-n1');
    Route::post('/test-n1', [App\Http\Controllers\CalculatorController::class, 'ans_n1'])->name('test-n1.ans');
    Route::get('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'show_n1'])->name('test-n1.show');
    Route::delete('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'destroy_n1'])->name('test-n1.destroy');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::put('/profile', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
});

Route::any('/{any}', function(){
    return view('layouts.extras.404');
});