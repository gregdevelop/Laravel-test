<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcularPromedioController;
use App\Http\Controllers\TaskController;
use App\Models\Task;
use App\Models\User;

Route::get('/', function () {
    // dd(Task::where('status', 1)->whereIn('user_id', User::withCount('tasks')->having('tasks', '>', 5)->orderBy('created_at', 'desc'))->toSql());
    $tareas = Task::all();

    return view('welcome', compact('tareas'));
})->name('welcome');

Route::post('/calcular-promedio', CalcularPromedioController::class)->name('calcular-promedio');

Route::resource('task', TaskController::class);
