@extends('dashboard.layouts.main')

@section('container')
    <div class="content-wrapper pb-1">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambahkan Isi Paket Soal</h1>
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
                            {{ $test->name }}
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
                                            <th scope="col">Pilihan</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pertanyaan as $soal)
                                            <tr>
                                                <td>{{ $soal->pertanyaan }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#EditPertanyaan">Edit</a>
                                                    <form action="{{ route('hapusPertanyaan') }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="text" value="{{ $soal->id }}" name="id"
                                                            hidden>
                                                        <input type="text" value="{{ $id }}" name="id_soal"
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
                    <form method="POST" action={{ route('addpertanyaan', $test->id) }} enctype="multipart/form-data">
                        @csrf
                        @if ($test->tipe_soal_id == 2)
                            <div class="form-group" id="gambar">
                                <label for="exampleFormControlFile1">Input Gambar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                    name="pertanyaan">
                            </div>
                        @else
                            <div class="form-group" id="profesi">
                                <label for="exampleInputPilihan1">Input Pilihan</label>
                                <input type="text" class="form-control" id="exampleInputPilihan1" name="pertanyaan">
                            </div>
                        @endif
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="EditPertanyaan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Soal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action={{ route('editpertanyaan', $id, $test->id) }}>
                        @csrf
                        @method('put')
                        <input type="text" value="{{ $id }}" name="id_soal" hidden>
                        @if ($test->tipe_soal_id == 2)
                            <div class="form-group" id="gambar">
                                <label for="exampleFormControlFile1">Input Gambar</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                    name="pertanyaan">
                            </div>
                        @else
                            <div class="form-group" id="profesi">
                                <label for="exampleInputPilihan1">Input Pilihan</label>
                                <input type="text" class="form-control" id="exampleInputPilihan1" name="pertanyaan">
                            </div>
                        @endif
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
