@extends('admin.layout')
@section('penjualan')
active
@endsection
@section('content')
<div class="page-heading">
    <h3>Data penjualan</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
            <section id="horizontal-input">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Tambah Data penjualan</h4>
                  </div>

                  <div class="card-body">
                    <div class="row">
                      
                    <form method="post" action="{{route('penjualan.update',$penjualan->id)}}">
                        @csrf
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Nama penjualan</label>
                            <input type="text" name="nama_penjualan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$penjualan->nama_penjualan}}">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Stok</label>
                            <input type="Number" name="stok" class="form-control" id="exampleInputPassword1" value="{{$penjualan->stok}}">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input type="Number" name="harga" class="form-control" id="exampleInputPassword1" value="{{$penjualan->harga}}">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
                
            </div>
            
        </div>
        
    </section>
@endsection 