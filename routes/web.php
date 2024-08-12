<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

// Route for ProfileController (if needed)
Route::get('/user', [ProfileController::class, 'index']);

// Route for DashboardController (dashboard page)
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route for the home page (welcome page)
Route::get('/', [DashboardController::class, 'index']);
