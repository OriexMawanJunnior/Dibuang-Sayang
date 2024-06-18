<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $store = Auth::user()->store;

        // Retrieve all products associated with the store
        $products = $store->products;

        // Compact store and products and pass to the view
        return view('seller.product.index', compact('store', 'products'));
    }

    public function create()
    {
        return view('seller.product.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'detail_product' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'date_sell_until' => 'required|date',
            'expired_date' => 'required|date',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $store = Auth::user()->store;

        // Create the product
        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->detail_product = $request->detail_product;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->date_sell_until = $request->date_sell_until;
        $product->expired_date = $request->expired_date;
        $product->store_id = $store->id;
        $product->save();

        // Handle file upload with Spatie Media Library
        if ($request->hasFile('foto')) {
            $product->addMedia($request->file('foto'))->toMediaCollection('products');
        }

        // Redirect or return response
        return redirect()->route('seller.product.index')->with('success', 'Product created successfully!');
    }
}