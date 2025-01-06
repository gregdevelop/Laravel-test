<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcularPromedioController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/calcular-promedio', CalcularPromedioController::class)->name('calcular-promedio');
