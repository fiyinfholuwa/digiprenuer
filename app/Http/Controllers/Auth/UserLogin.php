<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;

class UserLogin extends Controller
{
    //

    public function index()
    {
        return view('user.auth.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)
                     ->orWhere('email', $request->username)
                     ->first();

        if ($user && Auth::attempt($request->only('username', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);

        } else {
            return back()->with('fail', 'Invalid Login Details');
        }
    }


    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
