<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $products = Product::whereHas('store.user', function ($query) {
            $query->role('seller');
        })->get();

        return view('dashboard', compact('products'));
    }

    public function showShop(){
        $products = Product::whereHas('store.user', function ($query) {
            $query->role('seller');
        })->get();
        return view('buyer.shop', compact('products'));
    }
}
