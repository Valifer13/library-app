<?php

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

require __DIR__.'/auth.php';
