<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function loginUser(Request $request)
    {
        // dd($request->all());
        $attributes = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        // dd($attributes);

        if ($attributes->fails()) {
            return redirect()->back()->with('error', 'Filled the required field');
        }
        // dd(Auth::attempt($attributes));

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('tasks')->with('success', 'You are successfully logged in.');
        } else {
            return back()->with('error', 'You have to enter valid details.');
        }
    }

    public function signup()
    {
        return view('signup');
    }

    public function signupUser(Request $request)
    {
        // dd($request->all());
        // dd($request->email);
        $attributes = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);

        if ($attributes->fails()) {
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->new_password,
        ]);

        if ($attributes) {
            return redirect('/login')->with('success', 'Your account has been created.');
        } else {
            return redirect('/signup')->with('error', 'Something Wrong');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
