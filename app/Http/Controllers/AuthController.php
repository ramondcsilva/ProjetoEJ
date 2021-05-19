<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function servicesView (){
        return view('home.homeService');
    }
    
    public function dashboard(){
        if(Auth::check() === true){
            return view('home.home');
        }
        return redirect()->route('login');
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
            return redirect()->route('homeLoged');
        }

        return view('login.login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('/');
    }
}