<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

   

    public function registerCreate(Request $request) {
        $arr = $request->only('name', 'password');
        User::create($arr);
        return redirect()->route('login');
    }
    

    public function auth(Request $request) {
        $arr = $request->only('name', 'password');
        if (Auth::attempt($arr)) {
            return redirect('/admin');
        }
        return redirect()->route('login');
    }
}
