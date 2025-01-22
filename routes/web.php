<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Products;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
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


Route::get('product', [ProductsController::class,'ShowProducts']);
Route::get('details_p/{id}', [ProductsController::class,'DetailsProducts']);
Route::get('inventories_p/{id}', [ProductsController::class,'InventoriesProducts']);
Route::get('galleries_p', [ProductsController::class,'GalleriesProducts']);
});


Route::get('/users/{id}', [UserController::class, 'ShowSerchbyID']);
/*Route::get('/status/activo', [UserController::class, 'ShowSerchActived']);
Route::get('/All_mail/Email', [UserController::class, 'ShowSerchEmail']);*/

require __DIR__ . '/auth.php';
