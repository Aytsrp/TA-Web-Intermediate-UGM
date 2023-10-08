<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GarageController;

Route::get('/', [GarageController::class, 'homepage']);
Route::get('/dashboard', [GarageController::class, 'dashboard']);
Route::get('/dashboard/add', [GarageController::class, 'add']);
Route::post('/dashboard/add', [GarageController::class, 'store']);
Route::get('/dashboard/{id}/edit', [GarageController::class, 'edit']);
Route::put('/dashboard/{id}', [GarageController::class, 'update']);