<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FormController;
Route::get('/welcome', [WelcomeController::class, 'index']);

Route::get('/form', [FormController::class, 'show']);
Route::post('/form', action:[FormController::class, 'submit']);
