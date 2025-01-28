<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoryController;

Route::get('/welcome', [WelcomeController::class, 'index']);

Route::get('/form', [FormController::class, 'show']);
Route::post('/form', action:[FormController::class, 'submit']);
Route::get('/categories/{id}/products', [CategoryController::class, 'showProducts']);
Route::get('/categories', [CategoryController::class, 'listCategories']);
