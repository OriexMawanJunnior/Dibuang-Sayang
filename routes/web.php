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
    return view('Landing/landing');
});

Route::get('faq', function () {
    return view('Landing/faq');
});

Route::get('sign_in', function () {
    return view('UserEntry/sign_in');
});

Route::get('sign_up', function () {
    return view('UserEntry/sign_up');
});

Route::get('forgot1', function () {
    return view('UserEntry/forgot1');
});

Route::get('forgot2', function () {
    return view('UserEntry/forgot2');
});

Route::get('shop', function () {
    return view('Buying/shop');
});

Route::get('kategori', function () {
    return view('Buying/kategori');
});

Route::get('detail', function () {
    return view('Buying/prod_detail');
});


