<?php

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

Auth::routes();

// logout
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('landing-pages/index');
});

// cuma bisa diakses kalo udah login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('dashboard/index');
    });
    // tambahin route baru didalam sini kalo perlu login
});