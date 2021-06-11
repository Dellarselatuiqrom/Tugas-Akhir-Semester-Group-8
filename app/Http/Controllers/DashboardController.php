<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $user = Auth::user();
        $itemproduk = Produk::orderBy('created_at', 'desc')->limit(6)->get();
        $data = array('title' => 'Dashboard',
                    'itemproduk' => $itemproduk,
                    'user' => $user,
                );
        return view('dashboard.index', $data);
    }
}
