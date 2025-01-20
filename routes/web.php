<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::middleware(['auth'])->group(function () {
        // Volt::route('Customers', 'pages.Customers.Customers')->name('customers');
    });

Route::prefix('api/')->group(function () {
    // Route::get('all-services/{leng}', [ApiController::class, 'all_services']);
});
require __DIR__ . '/auth.php';
