<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcularPromedioController;
use App\Http\Controllers\TaskController;
use App\Models\Task;

Route::get('/', function () {
    $tareas = Task::all();

    return view('welcome', compact('tareas'));
})->name('welcome');

Route::post('/calcular-promedio', CalcularPromedioController::class)->name('calcular-promedio');

Route::resource('task', TaskController::class);
