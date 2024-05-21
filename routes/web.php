<?php

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

Route::get('/', function () {
    return view('layout/landing');
});

Route::get('faq', function () {
    return view('layout/faq');
});

Route::get('sign_in', function () {
    return view('layout/sign_in');
});

Route::get('sign_up', function () {
    return view('layout/sign_up');
});

Route::get('forgot1', function () {
    return view('layout/forgot1');
});

Route::get('forgot2', function () {
    return view('layout/forgot2');
});



Route::prefix('auth')->group(function () {
    Route::get('login/{role}', [AuthController::class, 'login'])->name('auth.login');
    Route::post('login/{role}', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('register/{role}', [AuthController::class, 'register'])->name('auth.register');
    Route::post('register/{role}', [AuthController::class, 'store'])->name('auth.store');
    Route::post('logout/{role}', [AuthController::class, 'logout'])->name('auth.logout');

    Route::get('forgot-password/{role}', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');
    Route::post('forgot-password/{role}', [AuthController::class, 'sendResetLinkEmail'])->name('auth.password.email');
    Route::get('reset-password/{role}', [AuthController::class, 'resetPassword'])->name('auth.password.reset');
    Route::post('reset-password/{role}', [AuthController::class, 'resetPassword'])->name('auth.password.update');

    Route::get('google/{role}', [GoogleController::class, 'redirectToGoogle'])->name('auth.google.redirect');
    Route::get('google/{role}/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');
});