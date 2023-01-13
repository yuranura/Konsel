@extends('dashboard.layouts.main')

@section('container')
    <div class="content-wrapper pb-1">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Psikolog</h1>
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
                            Daftar Psikolog
                        </h3>
                        <a href="#" class="btn btn-success btn-sm float-right" data-toggle="modal"
                            data-target="#ModalTambah">Tambahkan Psikolog</a>
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
                                            @if ($item->role == 3)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary" data-toggle="modal"
                                                            data-target="#ModalProfil">Input Foto</a>
                                                        <a href="#" class="btn btn-warning" data-toggle="modal"
                                                            data-target="#ModalEdit">Edit</a>
                                                        <form action="{{ route('hapusPsikolog', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="text" value="{{ $item->id }}" name="id"
                                                                hidden>
                                                            <button class="btn btn-danger mt-1"
                                                                type="submit">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
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
    <!-- Modal Tambah Psikolog -->
    <div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Psikolog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('addpsikolog') }}">
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
    <!-- Modal Profil Psikolog -->
    <div class="modal fade" id="ModalProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profil Psikolog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('inputGambar', $item->id) }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" value="{{ $item->id }}" name="id" hidden>
                        <div class="form-group" id="gambar">
                            <label for="exampleFormControlFile1">Input Gambar Psikolog</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                name="image_psikolog">
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
    <!-- Modal Edit Psikolog -->
    <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Psikolog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputName">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPlace">Tempat Lahir</label>
                            <input type="text" class="form-control" id="exampleInputPlace">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputTanggal">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="exampleInputTanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputNomorInduk">Nomor Induk Psikolog</label>
                            <input type="number" class="form-control" id="exampleInputNomorInduk">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBio">Deskripsi Psikolog</label>
                            <input type="text" class="form-control" id="exampleInputBio">
                        </div>
                        <div class="form-grup">
                            <label for="exampleInputPic">Input Foto Psikolog</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="contohupload2">
                                <label class="custom-file-label" for="contohupload2">Pilih Gambar</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection('container')