<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\PackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Home
Route::get('/', [PostController::class, 'show_home']);

// Destinasi Wisata
Route::get('/destinations/{slug}', [DestinationController::class, 'show_dest']);

// Paket Wisata
Route::get('/packages', [PackController::class, 'show_packages']);

// Homestays
Route::get('/homestays', [HomestayController::class, 'show_homestays']);
