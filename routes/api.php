<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\DoctorController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\TransactionController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('products', ProductController::class);
Route::apiResource('doctors', DoctorController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('profiles', ProfileController::class);
Route::apiResource('transactions', TransactionController::class);
//Route::apiResource('user', User::class);
