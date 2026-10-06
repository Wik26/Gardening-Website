<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\FavouriteController;
use Illuminate\Support\Facades\Route;

Route::get('/plants', [PlantController::class, 'index']);
Route::get('/plants/create', [PlantController::class, 'create'])->middleware(['auth', 'can:edit']);
Route::get('/plants/about', [PlantController::class, 'about']);
Route::post('/plants', [PlantController::class, 'store'])->middleware(['auth', 'can:edit']);
Route::get('/plants/{id}', [PlantController::class, 'show'])->middleware('auth');
Route::get('/plants/{id}/edit', [PlantController::class, 'edit'])->middleware(['auth', 'can:edit']);
Route::patch('/plants', [PlantController::class, 'update'])->middleware(['auth', 'can:edit']);
Route::delete('/plants', [PlantController::class, 'destroy'])->middleware(['auth', 'can:edit']);

Route::get('/search', [PlantController::class, 'search'])->name('plants.search');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/favourite', [FavouriteController::class, 'index'])->middleware(['auth', 'can:edit'])->name('favourite.index');
Route::post('/favourite/{id}', [FavouriteController::class, 'store'])->middleware(['auth', 'can:edit'])->name('favourite.store');