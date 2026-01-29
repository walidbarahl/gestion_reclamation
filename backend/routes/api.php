<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReclamationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth:sanctum'])->post('/logout', [AuthController::class, 'logout']);
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:sanctum', 'role:responsable'])->post('/reclamations', [ReclamationController::class, 'store']);
