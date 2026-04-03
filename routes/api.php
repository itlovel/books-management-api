<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
   
    Route::apiResource('/products', ProductController::class);
    
    Route::apiResource('books', BookController::class);

});