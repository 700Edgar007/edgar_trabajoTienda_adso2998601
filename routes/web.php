<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MovementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductoController::class);
Route::resource('movements', MovementController::class);