<?php

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
    return view('welcome');
});

Auth::routes(["register" => false]);

Route::middleware('auth')->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->get('/image/{size}', [App\Http\Controllers\Images\ImagesController::class, 'image'])->name('image');
Route::middleware('auth')->get('/admin', [App\Http\Controllers\Images\ImagesController::class, 'admin'])->name('admin');
Route::middleware('auth')->get('/test', [App\Http\Controllers\Images\ImagesController::class, 'test'])->name('test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
