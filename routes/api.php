<?php

use App\Http\Controllers\ApiAuthController;
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

Route::get('/show', [ApiAuthController::class, 'show'])->name('show');

Route::get('/show/{id}', [ApiAuthController::class, 'showMember'])->name('showMember');

Route::post('/register', [ApiAuthController::class, 'register'])->name('register');

Route::post('/login', [ApiAuthController::class, 'login'])->name('login');

Route::post('/logout', [ApiAuthController::class, 'logout'])->name('logout')->middleware(['auth:sanctum']);
