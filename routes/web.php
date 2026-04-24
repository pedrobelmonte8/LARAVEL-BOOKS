<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

Route::get('/', [BookController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
