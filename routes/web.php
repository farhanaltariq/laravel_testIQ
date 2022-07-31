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

Route::post('/pesan', [App\Http\Controllers\ContactController::class, 'sendMail'])->name('pesan');
// cuma bisa diakses kalo udah login
Route::middleware(['auth', 'active'])->group(function () {
    // tambahin route baru didalam sini kalo perlu login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/gcalendar', [App\Http\Controllers\CalendarController::class, 'calendar'])->name('calendar.display');
    Route::resource('calendar', App\Http\Controllers\CalendarController::class);

    Route::get('/key-v', [App\Http\Controllers\CalculatorController::class, 'key_v'])->name('key-v');
    Route::get('/test-v', [App\Http\Controllers\CalculatorController::class, 'test_v'])->name('test-v');
    Route::post('/test-v', [App\Http\Controllers\CalculatorController::class, 'ans_v'])->name('test-v.ans');
    Route::get('/test-v/{id}', [App\Http\Controllers\CalculatorController::class, 'show_v'])->name('test-v.show');
    Route::put('/test-v/{id}', [App\Http\Controllers\CalculatorController::class, 'update_v'])->name('test-v.update');
    Route::delete('/test-v/{id}', [App\Http\Controllers\CalculatorController::class, 'destroy_v'])->name('test-v.destroy');

    Route::get('/key-n1', [App\Http\Controllers\CalculatorController::class, 'key_n1'])->name('key-n1');
    Route::get('/test-n1', [App\Http\Controllers\CalculatorController::class, 'test_n1'])->name('test-n1');
    Route::get('/test-n1-create', [App\Http\Controllers\CalculatorController::class, 'create_n1'])->name('test-n1.create');
    Route::post('/test-n1-store', [App\Http\Controllers\CalculatorController::class, 'store_n1'])->name('test-n1.store');
    Route::post('/test-n1', [App\Http\Controllers\CalculatorController::class, 'ans_n1'])->name('test-n1.ans');
    Route::get('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'show_n1'])->name('test-n1.show');
    Route::put('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'update_n1'])->name('test-n1.update');
    Route::delete('/test-n1/{id}', [App\Http\Controllers\CalculatorController::class, 'destroy_n1'])->name('test-n1.destroy');

    Route::get('/key-n2', [App\Http\Controllers\CalculatorController::class, 'key_n2'])->name('key-n2');
    Route::get('/test-n2', [App\Http\Controllers\CalculatorController::class, 'test_n2'])->name('test-n2');
    Route::post('/test-n2', [App\Http\Controllers\CalculatorController::class, 'ans_n2'])->name('test-n2.ans');
    Route::get('/test-n2/{id}', [App\Http\Controllers\CalculatorController::class, 'show_n2'])->name('test-n2.show');

    Route::get('/key-n3', [App\Http\Controllers\CalculatorController::class, 'key_n3'])->name('key-n3');
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

Route::any('/{any}', function () {
    return view('layouts.extras.404');
});
