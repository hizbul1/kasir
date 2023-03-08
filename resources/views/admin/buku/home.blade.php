@extends('admin.layout')
@section('content')
<div class="page-heading">
    <h3>Data Buku</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
            <section class="section">
            <div class="row" id="table-hover-row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Buku</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <p>
                      <a href="{{route('buku.create')}}" class="btn btn-primary rounded-pill">Tambah Data Buku</a>
                      </p>
                    </div>
                    <!-- table hover -->
                    <div class="table-responsive">
                      <table class="table table-hover mb-0">
                        <thead>
                          <tr>
                            <th>Nama Buku</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($buku as $bu)
                          <tr>
                            <td class="text-bold-500">{{$bu->nama_buku}}</td>
                            <td>{{$bu->harga}}</td>
                            <td class="text-bold-500">{{$bu->stok}}</td>
                            <td>
                              <a href="{{route('buku.update/',$bu->id)}}">update </a>
                              <a href="{{route('buku.delete/',$bu->id)}}">delete </a>
                            </td>
                          </tr>
                         @endforeach  
                        </tbody>
                      </table>
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