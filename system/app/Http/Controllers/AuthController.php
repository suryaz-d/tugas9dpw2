<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showAdminLogin(){
        return view('adminlogin');
    }
    
    function AdminLoginprocess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('beranda')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function Adminlogout(){
        Auth::logout();
        return redirect('adminlogin');
    }

    function registration(){
        return view('adminlogin');
    }

    function forgotPassword(){
        return view('adminlogin');
    }


// login

    function showLogin(){
        return view('login');
    }
    
    function Loginprocess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('client/home')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function Logout(){
        Auth::logout();
        return redirect('login');
    }

}