<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
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
        $penjualan=penjualan::latest()->paginate(10);
        return view('admin.penjualan.home',compact('penjualan'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.penjualan.tambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penjualan=penjualan::create($request->all());
        return redirect('/penjualan')->with('status','data berhasil di tambah');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(penjualan $penjualan)
    {
        return view('admin.penjualan.update',compact('penjualan'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penjualan $penjualan)
    {
        return view('admin.penjualan.update',compact('penjualan'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penjualan $penjualan)
    {
        $penjualan->update($request->all());
        return redirect('/penjualan')->with('status','data berhasil di update');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect('/penjualan')->with('status','data berhasil di hapus');

        //
    }
}
