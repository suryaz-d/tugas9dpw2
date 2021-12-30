<?php

namespace App\Http\Controllers;
use App\Models\Produk;


class ClientProdukController extends Controller {
    function index(){
        $data['list_produk'] = Produk::all();
        return view('home', $data);
    }
    function showproduk(Produk $produk){
        $data['produk'] = $produk;
        return view('template.minics.showdetail', $data);
    }
    function prod(){
        $data['list_produk'] = Produk::all();
        return view('product', $data);
    }
    function seller(){
        $user = request()->user();
        $data['list_produk'] = $user->produk;
        return view('template.minics.seller', $data);
    }
}