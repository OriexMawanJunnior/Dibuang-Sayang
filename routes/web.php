<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
Route::middleware(['auth', 'role:seller'])->name('seller.')->prefix('seller')->group(function () {
    Route::get('/', [SellerController::class, 'index'])->name('dashboard');
    
    Route::get('/store/profile', [StoreController::class, 'showProfile'])->name('store.profile');
    Route::post('/store/profile', [StoreController::class, 'updateProfile'])->name('store.profile.update');

    Route::get('/store/address', [StoreController::class, 'showAddress'])->name('store.address');
    Route::post('/store/address', [StoreController::class, 'updateAddress'])->name('store.address.update');

    Route::resource('/product', ProductController::class);
});


Route::middleware(['auth', 'role:buyer'])->group(function () {
    Route::get('/dashboard', [BuyerController::class, 'index'])->name('dashboard');
    Route::get('/shop', [BuyerController::class, 'showShop'])->name('shop');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
