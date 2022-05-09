@extends('Admin.main')

@section('utama')
<div class="row justify-content-center"  style="padding-top: 50px">
    <div class="col-md-6">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Buat Data</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="form-group">
            <form action="{{ route('tambahpost') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <label for="inputName">Nama Barang</label>
            <input type="text" name="nama_sepeda" id="inputName" class="form-control" required autofocus>
          </div>
          <div class="form-group">
            <label for="inputDescription">Deskripsi</label>
            <textarea id="inputDescription" class="form-control" rows="4" name="deskripsi" value="-"></textarea>
          </div>
          <div class="form-group">
            <label>Spesifikasi</label>
            <textarea id="summernote" class="form-control" name="spesifikasi" value="-"></textarea>
          </div>
          <div class="form-group">
            <label for="inputStatus">Populer</label>
            <select id="inputStatus" name="kondisi" class="form-control custom-select">
              <option selected disabled>Pilihan</option>
              <option value="new-arrivals">new-arrivals</option>
              <option value="hot-sales">hot-sales</option>
              <option>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputStatus">Kategori</label>
            <select id="inputStatus"  name="kategori" class="form-control custom-select">
              <option selected disabled>Pilihan</option>
              <option value="Dewasa">Dewasa</option>
              <option value="Kids">kids</option>
              <option value="Balita">Balita</option>
              <option value="Anak">Anak</option>
              <option value="Orang Tua">Orang Tua</option>
              <option>Lainnya</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputClientCompany">Harga</label>
            <input type="text" name="harga_sepeda" id="inputClientCompany" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="inputClientCompany">Promo</label>
            <input type="text" id="inputClientCompany" name="promo" class="form-control">
          </div>
          <div class="form-group">
            <label for="inputProjectLeader">Masukkan Gambar</label>
            <input type="file" id="inputProjectLeader" name="foto_sepeda" required >
          </div>
          <div class="form-group mt-4">
            <div class="row">
                <div class="col-12">
                  <a href="{{ route('data') }}" class="btn btn-secondary ml-4">Batal</a>
                  <input type="submit" value="Buat" class="btn btn-success float-right mr-4">
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
