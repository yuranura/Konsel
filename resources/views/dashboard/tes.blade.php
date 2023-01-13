@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper pb-1">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Peserta Tes</h1>
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
                  Yang Sudah Menyelesaikan Tes
                </h3>
                </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative">
                       <table class="table">
                        <thead class="thead">
                          <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Judul Soal</th>
                            <th scope="col">Diselesaikan</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Marko Manik</td>
                            <td>Tes Psikologi 1</td>
                            <td>10 Agustus 2022</td>
                            <td>
                                <a href="/detail-tes" class="btn btn-success">Lihat</a>
                            </td>
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
@endsection('container')
