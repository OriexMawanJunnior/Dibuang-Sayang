<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
Route::middleware(['auth'])->name('seller.')->prefix('seller')->group(function () {
    Route::get('/', [SellerController::class, 'index'])->name('dashboard');
    
    Route::get('/store/profile', [StoreController::class, 'showProfile'])->name('store.profile');
    Route::post('/store/profile', [StoreController::class, 'updateProfile'])->name('store.profile.update');

    Route::get('/store/address', [StoreController::class, 'showAddress'])->name('store.address');
    Route::post('/store/address', [StoreController::class, 'updateAddress'])->name('store.address.update');

    Route::resource('/product', ProductController::class);
});

Route::post('/payment', [PaymentController::class, 'pay'])->name('pay');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [BuyerController::class, 'index'])->name('dashboard');
    Route::get('/shop', [BuyerController::class, 'showShop'])->name('shop');
    Route::get('/search', [BuyerController::class, 'search'])->name('shop.search');
    Route::get('/shop/{id}', [BuyerController::class, 'show'])->name('products.show');
    Route::get('/payment/{id}', [PaymentController::class, 'payment'])->name('payment');
    
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
