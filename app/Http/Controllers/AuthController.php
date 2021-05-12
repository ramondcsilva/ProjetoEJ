<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function dashboard(){
        if(Auth::check == true){
            return redirect()->route('home.home');
        }
        return view('home.home');
    }

    public function showLogin(){
        return view('login.login');
    }

    public function login(Request $request){
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        
        if(Auth::attempt($credentials)){
            return redirect()->route('home.home');
        }

        return view('enterprise');
    }

    public function logout(){
        Auth::logout();
        return view('federation');
    }
}