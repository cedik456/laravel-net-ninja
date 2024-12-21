<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UserController extends Controller
{
    public function showProfile()
    {
        // Get the authenticated user
        $user = FacadesAuth::user();

        // Return the view with the user data
        return view('profile.index', compact('user'));
    }
}
