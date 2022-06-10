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

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/service', function () {
    return view('pages/service');
});

Route::get('/contect', function () {
    $nama = 'Bobi';
    return view('pages/contect', ['nama' => $nama]);
});

Route::get('/dashboard', function () {
    return view('pages/dashboard');
});
