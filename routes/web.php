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
    // destinasi wisata
    Route::get('/admin-destinations', [AdminController::class, 'show_destinations']);
    // paket wisata
    Route::get('/admin-packages', [AdminController::class, 'show_packages']);
    // homestay
    Route::get('/admin-homestays', [AdminController::class, 'show_homestays']);
    // pesanan
    Route::get('/admin-orders', [AdminController::class, 'show_orders']);
    Route::get('/admin-order-insert', [AdminController::class, 'show_order_insert']);