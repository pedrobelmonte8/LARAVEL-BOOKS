<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'string',
            'email',
            'max:255',
            'password' => 'required',
            'string',
            'min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'credentials' => 'The provided credentials do not match our records.'
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
