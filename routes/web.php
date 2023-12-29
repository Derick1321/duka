<?php

use App\Http\Controllers\Location\Country\Region\District\Ward\StreetController;
use App\Http\Controllers\Location\Country\Region\District\WardController;
use App\Http\Controllers\Location\Country\Region\DistrictController;
use App\Http\Controllers\Location\Country\RegionController;
use App\Http\Controllers\Location\CountryController;
use App\Http\Controllers\Location\ShopController;
use App\Http\Controllers\Product\AssignProductCategory;
use App\Http\Controllers\Product\OptionValueAssignController;
use App\Http\Controllers\Product\ProductCategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\ProductOptionController;
use App\Http\Controllers\Product\ProductSkusController;
use App\Http\Controllers\Product\ProductSkuValueController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
Route::middleware("auth")->group(function () {
    Route::prefix("/location")->name("location.")->group(function () {
        Route::resource('countries', CountryController::class);
        Route::resource('countries.regions', RegionController::class);
        Route::resource('countries.regions.districts', DistrictController::class);
        Route::resource('countries.regions.districts.wards', WardController::class);
        Route::resource('countries.regions.districts.wards.streets', StreetController::class);
        Route::resource('shops', ShopController::class);
    });
    Route::prefix("/product")->name("product.")->group(function () {
        Route::resource('products', ProductController::class);
        Route::resource('products.productOptions', ProductOptionController::class);
        Route::resource('products.productSkus', ProductSkusController::class);
        Route::resource('products.productSkus.productSkusValue', ProductSkuValueController::class);
        Route::resource('productCategories', ProductCategoryController::class);
        Route::post('productCategories/{productCategory}/product-category', AssignProductCategory::class)->name("assignProduct");
        Route::post('products/{product}/productOptions/{productOption}/product-Values', OptionValueAssignController::class)->name("assignValues");
    });
});
