<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password')])) {
            if (Auth::user()->user_type == 1) {
                return redirect()->route('dashboard.admin');
            } elseif (Auth::user()->user_type == 2) {
                return redirect()->route('dashboard.user');
            } else {
                return redirect()->route('login')->with('error', "Email address or password is wrong");
            }
        }
    }
    public function signup()
    {
        return view("auth.register");
    }
    public function createUser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required|string',
            'email' => 'required|email|unique:users',
            'phone_no' => 'required',
            'password' => 'required'
        ]);
        $user = new User([
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "phone_no" => $request->get('phone_no'),
            "password" => Hash::make($request->get('password')),
            "user_type" => 2
        ]);
        $user->save();
        return redirect()->route('login')->with('Success','Account created successfully! Please log in to your account.');
    
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
