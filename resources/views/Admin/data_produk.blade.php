@extends('Admin.main')

@section('title')
  <title>Rachell Sepeda | Data Produk</title>
@endsection

@section('utama')
<div class="container-fluid">
<h5 class="mb-4" style="padding-top: 10px">Data Produk</h5>
@if($message = Session::get('Bisa'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i>{{ $message }}</h5>
  </div>
@endif
<a href="{{ route('tambah') }}" class="btn btn-primary mb-2"><strong>Buat Baru </strong>
  <i class="fas fa-plus"></i>
</a>
{{--  <a href="{{ route('kategori') }}" class="btn btn-info mb-2">Detail Kategori</a>  --}}
    <div class="card card-success">
        <div class="card-body">
            <div class="row justify-content-center">
                @forelse($data as $sepeda)
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <div class="card mb-2 bg-gradient-white">
                        <h5 class="card-title text-dark text-center mt-4 mb-2">{{ $sepeda->nama_sepeda }}</h5>
                    <img class="card-img-top mx-auto d-block" src="img/sepeda/{{ $sepeda->foto_sepeda }}" style="width: 200px;height: 150px;text-align:center">
                        <div class="col text-center mb-4 mt-4">
                            <a class="btn btn-outline-info" href="/data_produk/detail_data/{{ $sepeda->id }}">Detail</a>
                            <a class="btn btn-outline-warning" href="/data_produk/edit/{{ $sepeda->id }}">Ubah</a>
                            {{--  <a href="/delete/{{ $sepeda->id }}" onclick="return confirm('Apakah anda ingin menghapus data ini?')" class="btn btn-outline-danger">Hapus</a>  --}}
                            <a class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-danger{{ $sepeda->id }}">
                               Hapus
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                    <h3>Tidak Ditemukan</h3>
                @endforelse
            </div>
        </div>
    </div>
</div>

@foreach($data as $sepeda)
<div class="modal fade" id="modal-danger{{ $sepeda->id }}">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">{{ $sepeda->nama_sepeda }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Apakah anda yakin ingin menghapus ini?
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
          <a type="button" class="btn btn-outline-light"  href="/delete/{{ $sepeda->id }}">Ya</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endforeach
@endsection
