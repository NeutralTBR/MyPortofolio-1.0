<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('index', [HomeController::class, 'index']);

Route::get('about', [HomeController::class, 'about']);

Route::get('portofolio', [HomeController::class, 'portofolio']);

Route::get('contact', [HomeController::class, 'contact']);