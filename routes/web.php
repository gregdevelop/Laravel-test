<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TaskController;

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::post('/tasks/{id}/toggle', [TaskController::class, 'toggleStatus'])->name('tasks.toggleStatus');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
