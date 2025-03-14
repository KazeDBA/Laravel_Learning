<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\IMCController;

// Rotas GET
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/information', [PageController::class, 'information'])->name('information');

// Rota POST (cálculo do IMC)
Route::post('/calculate', [IMCController::class, 'calculate'])->name('calculate');