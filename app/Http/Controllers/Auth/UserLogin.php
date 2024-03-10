<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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

        $User = User::where('username', $request->username)->first();

        if (!empty($User)) {

            if (!Auth::attempt($request->only('username', 'password'))) {
                return back()->with('fail', 'Invalid Username Or Password');
            }

            $user = Auth::user();

            return redirect('home')->with(['message' => 'You are welcome home']);
        } else {

            return back()->with('fail', 'Invalid Login Details');
        }
    }
}