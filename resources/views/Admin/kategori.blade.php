@extends('Admin.main')

@section('utama')
<div class="container-fluid">
    <h3>Data Kategori</h3>
    <div class="container">
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
           Create
          </button>

            <div class="card">
                <div class="card-body">
                    <table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr class="text-center">
                                <th>Kategori</th>
                                <th width="150px">Aksi</th>
                            </tr>
                        </thead>
                        @foreach($data as $kategori)
                        <tbody>
                            <tr>
                                <td>{{ $kategori->kategori }}</td>
                                <td class="text-center">
                                    <a href="">Edit</a> || <a href="">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
    </div>
</div>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Default Modal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('kategoripost') }}" method="POST">
                @csrf
                <label>kategori</label>
                <input type="text" name="kategori">
                <button type="submit">Input</button>
            </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection
