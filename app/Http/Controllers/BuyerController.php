<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('dashboard', compact('products'));
    }

    public function showShop(){
        $products = Product::all();
        return view('buyer.shop', compact('products'));
    }
}
