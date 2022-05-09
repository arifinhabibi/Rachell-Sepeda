@extends('Admin.main')
@section('title')
<title>Rachell Sepeda | Profile</title>
@endsection

@section('headerProfile')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profile</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
@endsection

@section('utama')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="/assets/dist/img/avatar/{{ Auth::user()->avatar }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ Auth::user()->username }}</h3>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Aktifitas</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Pengaturan</a></li>
                    </ul>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">

                            {{-- Aktifitas area --}}
                            <h5 class="text-center">Fitur Belum Tersedia</h5>

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <h5 class="text-center mb-4">Edit Akun</h5>
                            <form class="form-horizontal" action="{{ route('profileEdit') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">nama pengguna</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" id="inputName"
                                            placeholder="Tulis nama pengguna disini">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">kata sandi</label>
                                    <div class="col-sm-10">
                                        <input type="Password" class="form-control" name="password" id="inputEmail"
                                            placeholder="kata sandi minimal 8 karakter">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputSkills" class="col-sm-2 col-form-label">foto avatar</label>
                                    <input type="file" name="avatar" id="inputSkills" placeholder="Skills" required>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target="#exampleModalCenter1">Submit</button>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content p-4">
                                            <div class="modal-body pt-3 pb-5">
                                              Apakah Anda yakin akan mengubah data akun anda?
                                            </div>
                                            <div class="row justify-content-end g-6">
                                              <div class="col-2">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                              </div>
                                              <div class="col-4">
                                                <button type="submit" class="btn btn-primary">Ya</button>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection