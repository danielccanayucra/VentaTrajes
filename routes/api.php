<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SuitController;
use App\Http\Controllers\SupplierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('clientes',ClientController::class);
Route::apiResource('prooverdores',SupplierController::class);
Route::apiResource('categories',CategoryController::class);
Route::apiResource('trajes',SuitController::class);
