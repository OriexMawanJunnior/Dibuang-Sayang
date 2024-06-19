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

    public function search(Request $request){
        $query = $request->input('query');

        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('detail_product', 'LIKE', "%{$query}%")
            ->get();

        return view('buyer.shop', compact('products'));
    }

    public function show($id){
        $product = Product::findOrFail($id);
        return view('buyer.show', compact('product'));
    }

}
