<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientProdukController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('beranda', [AdminController::class, 'showBeranda']);
Route::get('kategori', [AdminController::class, 'showKategori']);
Route::get('promo', [AdminController::class, 'showPromo']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter',[ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});
    

Route::get('adminlogin', [AuthController::class, 'showAdminLogin']);
Route::post('adminlogin', [AuthController::class, 'AdminLoginprocess']);
Route::post('adminlogout', [AuthController::class, 'Adminlogout']);

Route::get('login', [AuthController::class, 'showLogin']);
Route::post('login', [AuthController::class, 'Loginprocess']);
Route::post('logout', [AuthController::class, 'Logout']);

Route::get('register', [HomeController::class, 'showRegister']);

Route::prefix('client')->middleware('auth')->group(function(){
    Route::post('produk/filter2',[ProdukController::class, 'filter2']);
    Route::get('about', [HomeController::class, 'showAbout']);
    Route::get('whyus', [HomeController::class, 'showWhyus']);
    Route::get('testimonial', [HomeController::class, 'showTestimonial']);

    Route::get('home', [CLientProdukController::class, 'index']);
    Route::get('detail/{produk}', [ClientProdukController::class, 'showproduk']);

    Route::get('product', [CLientProdukController::class, 'prod']);

    Route::get('seller', [CLientProdukController::class, 'seller']);

});

