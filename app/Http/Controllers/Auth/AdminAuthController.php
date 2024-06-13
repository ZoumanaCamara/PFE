<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function showLoginForm() : View
    {
        return view('auth.login'); 
    }

    public function login(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'string', 'between:3,50'], 
            'password' => ['required', 'string', 'min:6']
        ]); 

        if (Auth::attempt($credentials, (bool) $request->remember)) {
            $request->session()->regenerate();
 
            return redirect()->intended(RouteServiceProvider::HOME);
        }
 
        return back()->withErrors([
            'email' => 'Identifiant / Mot de passe Incorrect !',
        ])->onlyInput('email');
    }
}
