<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaControllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth/login2');
});

// Route::get('/log', function () {
//     return view('auth/login2');
// });

Auth::routes();

Route::get('/re', function () {
    return view('auth/register2');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('profile');
});

Route::resource('/sisw',SiswaControllers::class);

Route::resource('/nilai', \App\Http\Controllers\NilaiController::class);

// hidden
Route::resource('/poto', \App\Http\Controllers\PotoController::class);
