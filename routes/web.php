<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FiltersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\User;
use App\Models\Service;
use App\Models\Categories;

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

        Route::get('allservices', [ServiceController::class, 'allservices']);
        Route::get('allcategories', [CategoriesController::class, 'allcategories']);
        Route::get('allfilters', [FiltersController::class, 'allfilters']);

        Route::get('allproducts', [ProductsController::class, 'allproducts']);
    
        // Route::get('user/{id}', [UserController::class, 'show']);
        // Route::get('user', [UserController::class, 'allUsers']);
        // Route::get('mails', [UserController::class, 'mail']);
        // Route::get('CallMail/{email}', [UserController::class, 'CallMail']);

});
require __DIR__ . '/auth.php';



