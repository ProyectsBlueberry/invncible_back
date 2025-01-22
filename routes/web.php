<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FiltersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SubcategoriesController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Products;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
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

Route::get('product', [ProductsController::class,'ShowProducts']);
Route::get('details_p/{id}', [ProductsController::class,'DetailsProducts']);
Route::get('inventories_p/{id}', [ProductsController::class,'InventoriesProducts']);
Route::get('galleries_p', [ProductsController::class,'GalleriesProducts']);
});


Route::get('/users/{id}', [UserController::class, 'ShowSerchbyID']);
/*Route::get('/status/activo', [UserController::class, 'ShowSerchActived']);
Route::get('/All_mail/Email', [UserController::class, 'ShowSerchEmail']);*/

require __DIR__ . '/auth.php';



