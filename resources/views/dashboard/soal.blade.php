@extends('dashboard.layouts.main')

@section('container')
    <div class="content-wrapper pb-1">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar Soal</h1>
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
                            Soal
                        </h3>
                        <a href="#" class="btn btn-success btn-sm float-right" data-toggle="modal"
                            data-target="#exampleModal">Tambahkan Soal</a>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative">
                                <table class="table">
                                    <thead class="thead">
                                        <tr>
                                            <th scope="col">Tipe Soal</th>
                                            <th scope="col">Pertanyaan</th>
                                            <th scope="col">Dibuat</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($test as $item)
                                            <tr>
                                                <td><a href="{{ route('viewSoal', $item->id) }}">{{ $item->name }}</a>
                                                </td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#ModalEdit">Edit</a>
                                                    <form action="{{ route('hapusSoal', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="text" value="{{ $item->id }}" name="id"
                                                            hidden>
                                                        <button class="btn btn-danger mt-1" type="submit">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Soal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('addsoal') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPaketSoal">Judul Paket Soal</label>
                            <input type="text" class="form-control" id="exampleInputPaketSoal" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDeskripsiSoal">Deskripsi Soal</label>
                            <input type="text" class="form-control" id="exampleInputDeskripsiSoal" name="deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDurasiSoal">Durasi Soal</label>
                            <input type="number" class="form-control" id="exampleInputDurasiSoal" name="durasi_detik">
                        </div>
                        <select class="custom-select custom-select" name="tipe_soal_id">
                            <option selected>Pilih Tipe Soal</option>
                            <option value="1">Tipe RMIB</option>
                            <option value="2">Tipe Gambar</option>
                            <option value="3">Tipe Holland</option>
                        </select>

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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Soal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('editSoal', $item->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="exampleInputPaketSoal">Judul Paket Soal</label>
                            <input type="text" class="form-control" id="exampleInputPaketSoal" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDeskripsiSoal">Deskripsi Soal</label>
                            <input type="text" class="form-control" id="exampleInputDeskripsiSoal" name="deskripsi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputDurasiSoal">Durasi Soal</label>
                            <input type="number" class="form-control" id="exampleInputDurasiSoal" name="durasi_detik">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection('container')
