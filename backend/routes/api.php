<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ReclamationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DirectionController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\ServiceController;



Route::post('/login', [AuthController::class, 'login']);
Route::middleware(['auth:sanctum'])->post('/logout', [AuthController::class, 'logout']);
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:sanctum', 'role:responsable'])->post('/reclamations', [ReclamationController::class, 'store']);
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/directions', [DirectionController::class, 'index']);

    Route::get('/directions/{direction}/divisions', 
        [DivisionController::class, 'byDirection']);

    Route::get('/divisions/{division}/services', 
        [ServiceController::class, 'byDivision']);
});
