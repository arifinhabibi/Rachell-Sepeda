@extends('Admin.main')

@section('title')
  <title>Rachell Sepeda | Ubah</title>
@endsection

@section('utama')



    <div class="row justify-content-center"  style="padding-top: 50px">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Data</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <form action="/data_produk/edit_proses/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="inputName">Nama Barang</label>
                <input type="text" name="nama_sepeda" value="{{ $data->nama_sepeda }}" id="inputName" class="form-control" required autofocus>
              </div>
              <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="deskripsi" required>{{ $data->deskripsi }}</textarea>
              <div class="form-group">
                <label>Spesifikasi</label>
                <textarea id="summernote" class="form-control" name="spesifikasi">{!! $data->spesifikasi !!}</textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Populer</label>
                <select id="inputStatus" name="kondisi" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  @if ($data->kondisi == "new-arrivals")
                  <option>Tidak Ada</option>
                  <option value="new-arrivals" selected>new-arrivals</option>
                  <option value="hot-sales">hot-sales</option>
                  @endif
                  @if ($data->kondisi == "hot-sales")
                  <option>Tidak Ada</option>
                  <option value="new-arrivals">new-arrivals</option>
                  <option value="hot-sales" selected>hot-sales</option>
                  @endif
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Kategori</label>
                <select id="inputStatus"  name="kategori" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  @if ($data->kategori == "Dewasa")
                  <option value="Dewasa" selected>Dewasa</option>
                  <option value="Kids">kids</option>
                  <option value="Balita">Balita</option>
                  <option value="Anak">Anak</option>
                  <option value="Orang Tua">Orang Tua</option>
                  @endif

                  
                  @if ($data->kategori == "Kids")
                  <option value="Dewasa">Dewasa</option>
                  <option value="Kids" selected>kids</option>
                  <option value="Balita">Balita</option>
                  <option value="Anak">Anak</option>
                  <option value="Orang Tua">Orang Tua</option>
                  @endif
                  
                  
                  @if ($data->kategori == "Balita")
                  <option value="Dewasa">Dewasa</option>
                  <option value="Kids">kids</option>
                  <option value="Balita" selected>Balita</option>
                  <option value="Anak">Anak</option>
                  <option value="Orang Tua">Orang Tua</option>
                  @endif
                  
                  @if ($data->kategori == "Anak")
                  <option value="Dewasa">Dewasa</option>
                  <option value="Kids">kids</option>
                  <option value="Balita">Balita</option>
                  <option value="Anak" selected>Anak</option>
                  <option value="Orang Tua">Orang Tua</option>
                  @endif
                  
                  @if ($data->kategori == "Orang Tua")
                  <option value="Dewasa">Dewasa</option>
                  <option value="Kids">kids</option>
                  <option value="Balita">Balita</option>
                  <option value="Anak">Anak</option>
                  <option value="Orang Tua" selected>Orang Tua</option>
                  @endif
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Harga</label>
                <input type="text" id="inputClientCompany" name="harga_sepeda" value="{{ $data->harga_sepeda }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Promo</label>
                <input type="text" id="inputClientCompany" name="promo" value="{{ $data->promo }}" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Masukkan Gambar</label>
                <input type="file" id="inputProjectLeader" name="foto_sepeda" value="{{ $data->foto_sepeda }}" required >
              </div>
              <div class="form-group mt-4">
                <div class="row">
                    <div class="col-12">
                      <a href="{{ route('data') }}" class="btn btn-secondary ml-4">Batal</a>
                      <input type="submit" value="Ubah" class="btn btn-success float-right mr-4">
                    </div>
                  </div>

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
@endsection
