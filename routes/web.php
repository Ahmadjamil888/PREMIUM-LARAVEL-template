<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatController;

/**
 * Public Route - Welcome Page
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Authenticated Routes
 */
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [ChatController::class, 'index'])->name('dashboard');

    // Chat Routes
    Route::post('/chat/new', [ChatController::class, 'newChat'])->name('chat.new');
    Route::get('/chat/{id}', [ChatController::class, 'view'])->name('chat.view');
    Route::post('/chat/{id}/send', [ChatController::class, 'send'])->name('chat.send');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Breeze Auth Routes
 */
require __DIR__ . '/auth.php';
