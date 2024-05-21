<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Buyer;
use App\Models\Seller;
use App\Models\Admin;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:buyer,seller,admin')->except('logout');
    }

    public function login($role)
    {
        return view('auth.login', ['role' => $role]);
    }

    public function authenticate(Request $request, $role)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->remember;

        if (Auth::guard($role)->attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with([
                'status' => 'success',
                'message' => 'Logged in successfully!'
            ]);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register($role)
    {
        return view('auth.register', ['role' => $role]);
    }

    public function store(Request $request, $role)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . $role . 's,email',
            'password' => 'required|string|min:8|confirmed',
            'phone_number' => 'required|string|max:15',
        ]);

        $model = $this->getModel($role);
        $model::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
        ]);

        return redirect('auth/login/' . $role)->with([
            'status' => 'success',
            'message' => 'Account created successfully! Please login to continue.'
        ]);
    }

    public function logout(Request $request, $role)
    {
        Auth::guard($role)->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with([
            'status' => 'success',
            'message' => 'Logged out successfully!'
        ]);
    }

    public function forgotPassword($role)
    {
        return view('auth.forgot-password', ['role' => $role]);
    }

    public function sendResetLinkEmail(Request $request, $role)
    {
        $request->validate([
            'email' => 'required|email|exists:' . $role . 's,email',
        ]);

        $status = Password::broker($role . 's')->sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with([
                'status' => 'success',
                'message' => __($status)
            ])
            : back()->withErrors([
                'email' => __($status)
            ]);
    }

    public function resetPassword(Request $request, $role)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $status = Password::broker($role . 's')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('auth.login', ['role' => $role])->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }

    protected function getModel($role)
    {
        switch ($role) {
            case 'buyer':
                return new Buyer;
            case 'seller':
                return new Seller;
            case 'admin':
                return new Admin;
            default:
                throw new \Exception("Invalid role");
        }
    }
}

