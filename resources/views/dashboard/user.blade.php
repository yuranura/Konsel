@extends('dashboard.layouts.main')

@section('container')
    <div class="content-wrapper pb-1">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pengguna</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- /.row -->
            <section class="connectedSortable">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-secondary mt-1">
                            Daftar Pengguna
                        </h3>
                        <a href="#" class="btn btn-success btn-sm float-right" data-toggle="modal"
                            data-target="#ModalTambah">Tambahkan Pengguna</a>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative">
                                <table class="table">
                                    <thead class="thead">
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Dibuat</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#ModalEdit">Edit</a>
                                                    <form action="{{ route('hapusAkun', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="text" value="{{ $item->id }}" name="id"
                                                            hidden>
                                                        <button class="btn btn-danger mt-1" type="submit">Hapus</button>
                                                    </form>
                                                </td>
                                        @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>
            </section>
        </section>
        <!-- /.content -->
    </div>
    <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('adduser') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputName" value="{{ old('name') }}"
                                name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="{{ old('email') }}" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                value="{{ old('password') }}" name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPlace">Tempat Lahir</label>
                            <input type="text" class="form-control" id="exampleInputPlace" value="{{ old('kota') }}"
                                name="kota_lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTanggal">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputTanggal"
                                value="{{ old('tanggal') }}" name="tanggal_lahir">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('editAkun', $item->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputName">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPlace">Tempat Lahir</label>
                            <input type="text" class="form-control" id="exampleInputPlace" name="kota_lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTanggal">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputTanggal" name="tanggal_lahir">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection('container')
