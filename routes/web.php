<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [BookController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/wishlist', [WishlistController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('wishlist');

Route::view('cart', 'cart')
    ->middleware(['auth', 'verified'])
    ->name('cart');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/book-manage', [AdminDashboardController::class, 'bookManage'])->name('admin.book-manage');
        Route::get('/loans-list', [AdminDashboardController::class, 'loansList'])->name('admin.loans-list');
        Route::get('/notification', [AdminDashboardController::class, 'notification'])->name('admin.notification');
        Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});

require __DIR__.'/auth.php';
