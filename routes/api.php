<?php

use App\Http\Controllers\Auth\AuthController;
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

Route::post('/auth/Register', [AuthController::class,'register'])->name('register');
Route::post('/auth/Login', [AuthController::class,'login'])->name('login');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('auth/Me', [AuthController::class, 'me']);
    Route::post('auth/Logout', [AuthController::class, 'logout']);
});
