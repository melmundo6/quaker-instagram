<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/images', [App\Http\Controllers\Images\ImagesController::class, 'store'])->name('images.store');
Route::get('/getImage/{size}', [App\Http\Controllers\Images\ImagesController::class, 'getImage'])->name('getImage');