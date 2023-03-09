<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class BukuController extends Controller
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
        $buku=buku::latest()->paginate(10);
        return view('admin.buku.home',compact('buku'));
        
        //
    }
    public function cari(Request $request){
        // dd($request);
        $buku=buku::where('nama_buku','like','%'.$request->cari.'%')->get();
        return view('admin.buku.home',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku.tambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $buku=buku::create($request->all());
        return redirect('/buku')->with('status','data berhasil di tambah');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(buku $buku)
    {
        return response()->json(['data'=>$buku]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buku $buku)
    {
        return view('admin.buku.update',compact('buku'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buku $buku)
    {
        $buku->update($request->all());
        return redirect('/buku')->with('status','data berhasil di update');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buku $buku)
    {
        $buku->delete();
        return redirect('/buku')->with('status','data berhasil di hapus');

        //
    }
}
