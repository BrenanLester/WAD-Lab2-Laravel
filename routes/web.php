<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;

Route::get('/hello', function () {
    return "Hello Laravel!";
});

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/projects', [ProjectsController::class, 'index']);