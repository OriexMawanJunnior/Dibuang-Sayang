<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MidtransNotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/payment', [PaymentController::class, 'pay'])->name('pay');
Route::post('/payment/notification', [MidtransNotificationController::class, 'notification'])->name('payment.notification');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
