<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\PromedioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('promedio', function () {
    return view('promedio');
});

Route::resource('tasks', TaskController::class);
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::post('calcular-promedio', [PromedioController::class, 'calcularPromedio']);