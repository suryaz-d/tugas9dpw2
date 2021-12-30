<?php

namespace App\Http\Controllers;


class HomeController extends Controller{

    function showHome(){
        return view('home');
    }

    function showProduct(){
        return view('product');
    }

    function showAbout(){
        return view('about');
    }

    function showWhyus(){
        return view('whyus');
    }

    function showTestimonial(){
        return view('testimonial');
    }

    function showLogin(){
        return view('login');
    }

    function showRegister(){
        return view('register');
    }

}