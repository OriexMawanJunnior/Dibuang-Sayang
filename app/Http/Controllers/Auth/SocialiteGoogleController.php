<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;

class SocialiteGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the callback from Google.
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $findUser = User::where('email', $googleUser->getEmail())->first();

            if ($findUser) {
                $findUser->update([
                    'google_id' => $googleUser->getId()
                ]);
            } else {
                $findUser = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => Hash::make(\Str::random(24))
                ]);

                // Assign role to user
                $findUser->assignRole('buyer');

                $avatarUrl = $googleUser->avatar;
                $avatarContents = file_get_contents($avatarUrl);

                $findUser->addMediaFromBase64(base64_encode($avatarContents))
                        ->usingFileName('avatar.jpg')
                        ->toMediaCollection('avatars');

            }
            Auth::login($findUser, true);

            return redirect()->intended(RouteServiceProvider::HOME);
        } catch (Exception $e) {
            return redirect()->route('login')->withErrors(['msg' => 'Unable to login with Google, please try again.']);
        }
    }
}
