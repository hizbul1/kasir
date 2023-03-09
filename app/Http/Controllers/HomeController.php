<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;
use App\Models\pembeli;
use App\Models\penjualan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buku=buku::count();
        $pembelian=pembeli::count();
        $penjualan=penjualan::sum('pembayaran');
        return view('admin.home',compact('buku','pembelian','penjualan'));
    }
}
