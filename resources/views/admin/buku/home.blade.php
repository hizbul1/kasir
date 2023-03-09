@extends('admin.layout')
@section('buku')
active
@endsection
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
                      <div class="dataTable-search">
                        <form action="{{route('buku.cari')}}" method="get">
                          @csrf
                      <input class="dataTable-input" name="cari" placeholder="Cari..." type="text">
                      <button type="submit" class="btn btn-primary me-1 mb-1">
                                Cari
                              </button>
                        </form></div>
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
                              <a class="btn btn-info rounded-pill" href="{{route('buku.edit',$bu->id)}}">update <symbol class="bi bi-pencil-square" viewBox="0 0 16 16" id="pencil-square"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path></symbol></a>|
                              <a class="btn btn-danger rounded-pill" href="{{route('buku.delete',$bu->id)}}">delete <symbol class="bi bi-trash-fill" viewBox="0 0 16 16" id="trash-fill"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path></symbol></a>
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