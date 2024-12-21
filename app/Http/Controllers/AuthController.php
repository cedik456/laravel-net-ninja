<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showSignupForm() {
        
        return view('auth.signup');
    }

    public function processSignup(Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect()->route('login');
    }

    public function showLoginForm() {
        return view('auth.login');
    }

    // Process the login form
    public function processLogin(Request $request) {
        // Validate login fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Check if the user exists and password is correct
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // Login successful, redirect to students index
            return redirect()->route('students.index');
        }

        // Login failed, redirect back with an error message
        return back()->withErrors([
            'email' => 'Email and Password are incorrect.',
        ]);
    }

    public function logout()

    {
            // Log the user out
            auth()->logout();

            // Redirect the user to the login page
            return redirect()->route('login');
    }

    
}
