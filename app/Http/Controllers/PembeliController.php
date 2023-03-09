<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use App\Models\buku;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembeli=pembeli::latest()->paginate(10);
        return view('admin.pembelian.home',compact('pembeli'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku=buku::latest()->get();
        return view('admin.pembelian.tambah',compact('buku'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pembeli=pembeli::create($request->all());
        return redirect('/pembeli')->with('status','data berhasil di tambah');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pembeli $pembeli)
    {
        return view('admin.pembelian.update',compact('pembeli'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembeli $pembeli)
    {
        return view('admin.pembelian.update',compact('pembeli'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pembeli $pembeli)
    {
        $pembeli->update($request->all());
        return redirect('/pembeli')->with('status','data berhasil di update');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembeli $pembeli)
    {
        $pembeli->delete();
        return redirect('/pembeli')->with('status','data berhasil di hapus');

        //
    }
}
