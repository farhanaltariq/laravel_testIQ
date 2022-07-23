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
    Route::get('/test-n1-create', [App\Http\Controllers\CalculatorController::class, 'create_n1'])->name('test-n1.create');
    Route::post('/test-n1-store', [App\Http\Controllers\CalculatorController::class, 'store_n1'])->name('test-n1.store');
    Route::post('/test-n1', [App\Http\Controllers\CalculatorController::class, 'ans_n1'])->name('test-n1.ans');
    Route::get('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'show_n1'])->name('test-n1.show');
    Route::put('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'update_n1'])->name('test-n1.update');
    Route::delete('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'destroy_n1'])->name('test-n1.destroy');
    
    Route::get('/test-n3', [App\Http\Controllers\CalculatorController::class, 'test_n3'])->name('test-n3');
    Route::post('/test-n3', [App\Http\Controllers\CalculatorController::class, 'ans_n3'])->name('test-n3.ans');
    Route::get('/test-n3/{id}', [App\Http\Controllers\CalculatorController::class, 'show_n3'])->name('test-n3.show');
    Route::put('/test-n3/{id}', [App\Http\Controllers\CalculatorController::class, 'update_n3'])->name('test-n3.update');
    Route::delete('/test-n3/{id}', [App\Http\Controllers\CalculatorController::class, 'destroy_n3'])->name('test-n3.destroy');

    Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/profile/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/profile/create', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::put('/profile', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::get('/users', [App\Http\Controllers\UserController::class, 'lists'])->name('user.lists');
    Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'updateStatus'])->name('user.updateStatus');
});

Route::any('/{any}', function(){
    return view('layouts.extras.404');
});