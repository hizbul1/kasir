<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PembeliController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.buku.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/buku',[BukuController::class,'index'])->name('buku');
route::get('/buku/{buku}',[BukuController::class,'show'])->name('buku.show');
route::get('/buku/cari',[BukuController::class,'cari'])->name('buku.cari');
route::get('/buku/tambah',[BukuController::class,'create'])->name('buku.create');
route::post('/buku/store',[BukuController::class,'store'])->name('buku.store');
route::get('/buku/edit/{buku}',[BukuController::class,'edit'])->name('buku.edit');
route::post('/buku/update/{buku}',[BukuController::class,'update'])->name('buku.update');
route::get('/buku/delete/{buku}',[BukuController::class,'destroy'])->name('buku.delete');

route::get('/pembeli',[PembeliController::class,'index'])->name('pembeli');
route::get('/pembeli/tambah',[PembeliController::class,'create'])->name('pembeli.create');
route::post('/pembeli/store',[PembeliController::class,'store'])->name('pembeli.store');
route::get('/pembeli/edit/{pembeli}',[PembeliController::class,'edit'])->name('pembeli.edit');
route::post('/pembeli/update/{pembeli}',[PembeliController::class,'update'])->name('pembeli.update');
route::get('/pembeli/delete/{pembeli}',[PembeliController::class,'destroy'])->name('pembeli.delete');

route::get('/penjualan',[PenjualanController::class,'index'])->name('penjualan');
route::get('/penjualan/tambah',[PenjualanController::class,'create'])->name('penjualan.create');
route::post('/penjualan/store',[PenjualanController::class,'store'])->name('penjualan.store');
route::get('/penjualan/edit/{penjualan}',[PenjualanController::class,'edit'])->name('penjualan.edit');
route::post('/penjualan/update/{penjualan}',[PenjualanController::class,'update'])->name('penjualan.update');
route::get('/penjualan/delete/{penjualan}',[PenjualanController::class,'destroy'])->name('penjualan.delete');
