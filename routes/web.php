<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\DestinationController;

// USER
    // Home
    Route::get('/', [PostController::class, 'show_home']);
    // Destinasi Wisata
    Route::get('/destinations/{slug}', [DestinationController::class, 'show_dest']);
    // Paket Wisata
    Route::get('/packages', [PackController::class, 'show_packages']);
    // Homestays
    Route::get('/homestays', [HomestayController::class, 'show_homestays']);

// ADMIN
    // dashboard
    Route::get('/admin', [AdminController::class, 'show_dashboard']);