@extends('admin.layout')
@section('pembeli')
active
@endsection
@section('content')
<div class="page-heading">
    <h3>Data pembeli</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-8">
            <div class="row">
            <section id="horizontal-input">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Tambah Data pembeli</h4>
                  </div>

                  <div class="card-body">
                    <div class="row">
                      
                    <form method="post" action="{{route('pembeli.store')}}">
                        @csrf
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                        <select class="form-select" id="kategori_buku" name="id_buku">
                        @foreach($buku as $bu)      
                        <option value="{{$bu->id}}">{{$bu->nama_buku}}</option>
                        @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Nama pembeli</label>
                            <input type="text" name="nama_pembeli" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <input type="hidden" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="dalam_antrian">
                            <input type="hidden" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{date('Y-m-d')}}">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Jumlah Barang</label>
                            <input type="Number" name="Jumlah_pembelian" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Distributor</label>
                            <select class="form-select" id="basicSelect" name="id_buku">
                        <option value="opo">opo</option>
                            </select>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Pembayaran</label>
                            <input type="Number" name="Pembayaran" class="form-control" id="exampleInputPassword1">
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
        <div class="col-12 col-lg-4">
            <div class="row">
            <section id="horizontal-input">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Data penjualan</h4>
                  </div>

                  <div class="card-body">
                    <div class="row" id="result">
                      
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
                
            </div>
            
        </div>
        
    </section>
    
                            
                            
                        </div>
                        <br>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Harga</label>
                            <input type="text" name="nama_pembeli" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <br>
                        <div class="mb-3 col-lg-6">
                            <label for="exampleInputPassword1" class="form-label">Total Harga</label>
                            <input type="text" readonly name="stok" class="form-control" id="exampleInputPassword1">
                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <script>
      $(document).ready(function() {
  $('#kategori_buku').on('change', function() {
    var categoryId = $(this).val(); // mengambil value dari elemen select
    console.log(categoryId);
    if (categoryId != '') {
      $.ajax({
        url: '/buku/' + categoryId, // endpoint untuk mengambil data dari server
        type: 'GET',
        dataType: 'json',
        success: function(response) {
          // Jika request berhasil, data akan ditampilkan pada halaman
          var result = response.data;
          var html = `<div class="mb-3 col-lg-6">`;
          $.each(buku, function(index, item) {
            html += `<label for="exampleInputEmail1" class="form-label">Nama Buku</label> <input type="text" readonly name="Jumlah_pembelian" class="form-control" id="exampleInputPassword1" value="` + item.nama_buku + '">';
          });
          $('#result').html(html);
          console.log(html);
        },
        error: function(xhr, status, error) {
          console.log(html);
          // Jika request gagal, akan ditampilkan pesan error pada halaman
          $('#result').html('<p>' + error + '</p>');
        }
      });
    } else {
          console.log("alah");
      $('#result').html(''); // menghapus hasil jika kategori tidak dipilih
    }
  });
});
    </script>
    

@endsection 