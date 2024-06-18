<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function showProfile(){
        $store = Auth::user()->store;
        return view('seller.store.profile', compact('store'));
    } 

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:16',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $store = Auth::user()->store;

        // Jika store ada, lakukan update, jika tidak, buat entri baru
        if ($store) {
            $data = $request->only(['name', 'category', 'email', 'phone_number']);
            $data = array_filter($data, function ($value) {
                return !is_null($value);
            });

            $store->update($data);

            if ($request->hasFile('logo')) {
                $store->addMediaFromRequest('logo')->toMediaCollection('logos');
            }
        } else {
            // Jika tidak ada store, buat entri baru
            $store = Store::create([
                'name' => $request->name,
                'category' => $request->category,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'user_id' => Auth::id(), // Pastikan Anda menyimpan user_id juga
            ]);

            if ($request->hasFile('logo')) {
                $store->addMediaFromRequest('logo')->toMediaCollection('logos');
            }
        }

        return redirect()->route('seller.store.profile')->with('message', 'Store Profile is Updated');
    }

    public function showAddress(){
        $store = Auth::user()->store;
        return view('seller.store.address', compact('store'));
    } 

    public function updateAddress(Request $request){
        $request->validate([
            'address' => 'required|string|max:255',
            'detail_address' => 'required|string|max:255',
            'province' => 'required|string',
            'city' => 'required|string',
            'district' => 'required|string',
            'postal_code' => 'required|string',  
        ]);

        $store = Auth::user()->store;
        $store->update([
            'address' => $request->address,
            'detail_address' => $request->detail_address,
            'province' => $request->province,
            'city' => $request->city,
            'district' => $request->district,
            'postal_code' => $request->postal_code, 
        ]);

        return redirect()->route('seller.store.address')->with('message', 'Store Address is Updated');
    }
}
