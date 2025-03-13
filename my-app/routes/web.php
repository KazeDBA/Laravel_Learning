<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Rota Home (usando controller)
Route::get('/', [PageController::class, 'home'])->name('home');

// Rota Information (usando controller)
Route::get('/information', [PageController::class, 'information'])->name('information');