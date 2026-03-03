<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('auth/login', [AuthController::class, 'login']);
Route::group(['middleware' => 'jwt.auth', 'prefix' => 'auth'], function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
});

Route::apiResource('products', ProductController::class)
    ->only(['index', 'show']); // только чтение, публично

Route::middleware('jwt.auth')->group(function () {
    Route::apiResource('products', ProductController::class)
        ->except(['index', 'show']); // всё кроме чтения, под JWT
});

Route::apiResource('categories', CategoryController::class);