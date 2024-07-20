<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'show_home']);

// Destinasi Wisata
Route::get('/destinations-ijen', [PostController::class, 'show_dest_ijen']);
Route::get('/destinations-terakota', [PostController::class, 'show_dest_terakota']);
Route::get('/destinations-seruni', [PostController::class, 'show_dest_seruni']);

// Paket Wisata
Route::get('/packages', [PostController::class, 'show_packages']);

// Homestays
Route::get('/homestays', [PostController::class, 'show_homestays']);
