<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function check_login()
    {
        if (Auth::check()) {
            $user_type = Auth::user()->user_type;
            if ($user_type === 1) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('user.dashboard');
            }
        } else {
            return redirect()->back();
        }
    }
}
