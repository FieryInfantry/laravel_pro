<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/products/create',[ProductController::class, 'create'])->name('products_create');//Papunta sa UI
Route::post('/products/store', [ProductController::class, 'store'])->name('store_product');//Pang save ng product