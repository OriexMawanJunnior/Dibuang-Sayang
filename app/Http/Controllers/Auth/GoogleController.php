<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Buyer;
use App\Models\Seller;
use Exception;

class GoogleController extends Controller
{
    public function redirectToGoogle($role)
    {
        if (!in_array($role, ['buyer', 'seller'])) {
            return redirect('/')->withErrors(['role' => 'Invalid role']);
        }

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request, $role)
    {
        if (!in_array($role, ['buyer', 'seller'])) {
            return redirect('/')->withErrors(['role' => 'Invalid role']);
        }

        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $email = $googleUser->getEmail();
            $name = $googleUser->getName();

            if ($role == 'buyer') {
                $user = Buyer::where('email', $email)->first();
                if (!$user) {
                    $user = Buyer::create([
                        'name' => $name,
                        'email' => $email,
                        'google_id' => $googleUser->getId(),
                        'password' => bcrypt(str_random(16))
                    ]);
                }
                Auth::guard('buyer')->login($user);
                return redirect()->intended('/buyer/dashboard');
            } elseif ($role == 'seller') {
                $user = Seller::where('email', $email)->first();
                if (!$user) {
                    $user = Seller::create([
                        'name' => $name,
                        'email' => $email,
                        'google_id' => $googleUser->getId(),
                        'password' => bcrypt(str_random(16))
                    ]);
                }
                Auth::guard('seller')->login($user);
                return redirect()->intended('/seller/dashboard');
            }
        } catch (Exception $e) {
            return redirect('/')->withErrors(['auth' => 'Authentication failed, please try again.']);
        }
    }
}
