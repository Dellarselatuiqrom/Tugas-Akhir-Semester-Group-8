<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;

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
Route::get('/', 'HomepageController@index');
Route::get('/about', 'HomepageController@about');
Route::get('/kontak', 'HomepageController@kontak');
Route::get('/kategori', 'HomepageController@kategori');
Route::get('/kategori/{slug}', 'HomepageController@kategoribyslug');
Route::get('/produk', 'HomepageController@produk');
Route::get('/produk/{id}', 'HomepageController@produkdetail');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
   Route::get('/', 'DashboardController@index');
   // route kategori
   Route::resource('kategori', 'KategoriController');
   // route produk
   Route::resource('produk', 'ProdukController');
   // route customer
   Route::resource('customer', 'CustomerController');
   // route transaksi
   Route::resource('transaksi', 'TransaksiController');
   
   Route::put('updateprofil/{id}', 'UserController@update')->name('updateprofil');
   // route user
   
   // profil
   Route::get('profil', 'UserController@index');
   // setting profil
   Route::get('setting', 'UserController@setting');
   // form laporan
   Route::get('laporan', 'LaporanController@index');
   // proses laporan
   Route::get('proseslaporan', 'LaporanController@proses');
   // image
   Route::get('image', 'ImageController@index');
   // simpan image
   Route::post('image', 'ImageController@store');
   // hapus image by id
   Route::delete('image/{id}', 'ImageController@destroy');
   // upload image kategori
   Route::post('imagekategori', 'KategoriController@uploadimage');
   // hapus image kategori
   Route::delete('imagekategori/{id}', 'KategoriController@deleteimage');
   // upload image produk
   Route::post('produkimage', 'ProdukController@uploadimage');
   // hapus image produk
   Route::delete('produkimage/{id}', 'ProdukController@deleteimage');
  Route::resource('promo', 'ProdukPromoController');
  // load async produk
  Route::get('loadprodukasync/{id}', 'ProdukController@loadasync');
    // wishlist
    Route::resource('wishlist', 'WishlistController');
// shopping cart
Route::group(['prefix' => 'user','middleware' => 'auth'], function() {
    Route::get('/', 'HomepageController@index');
    // cart
    Route::resource('cart', 'CartController');
    Route::patch('kosongkan/{id}', 'CartController@kosongkan');
    // cart detail
    Route::resource('cartdetail', 'CartDetailController');
    // alamat pengiriman
    Route::resource('alamatpengiriman', 'AlamatPengirimanController');
    // checkout
    Route::get('checkout', 'CartController@checkout');
    //exportpdf
    Route::get('cetakpdf', 'AlamatPengirimanController@cetakpdf');

  });
  });

Auth::routes();

Route::get('/home', function() {
    return redirect('/admin');
  });
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
