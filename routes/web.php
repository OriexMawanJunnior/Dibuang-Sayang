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


