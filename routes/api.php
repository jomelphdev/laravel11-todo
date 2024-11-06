<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Get all tasks
Route::get('/tasks', [TaskController::class, 'index']);

// Create a new task
Route::post('/tasks', [TaskController::class, 'store']);

// Update an existing task by ID
Route::put('/tasks/{id}', [TaskController::class, 'update']);

// Delete a task by ID
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);