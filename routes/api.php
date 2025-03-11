<?php

use App\Http\Controllers\Api\Movimiento;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('productos',ProductController::class );
Route::apiResource('movimiento',Movimiento::class );
