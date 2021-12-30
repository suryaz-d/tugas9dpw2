<?php

namespace App\Http\Controllers;

class AdminController extends Controller{

    function showBeranda(){
        return view('beranda');
    }

    function showProduk(){
        return view('produk');
    }

    function showkategori(){
        return view('kategori');
    }

    function showPromo(){
        return view('promo');
    }

    
}