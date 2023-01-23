<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class bookController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    
    public function dashboard(){
        return view('dashboard.dashboard');
    }

    public function user(){
        $user = User::all();
        return view('dashboard.user', compact('user'));  

    }

    
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => "required",
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function register(){
        return view('register');
    }
    public function inputRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required',
            'tlp' => 'required',
            'address' => 'required',
            'password' => 'required|min:4',
        ]);

        User::create ([
            'name' => $request->name,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('success', 'berhasil membuat akun!');
    }
}
