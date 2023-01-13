@extends('dashboard.layouts.main')

@section('container')
<div class="content-wrapper pb-1">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3 class="text-danger">44</h3>
                <p class="text-danger">Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add text-danger"></i>
              </div>
              <a href="#" class="small-box-footer bg-danger" style="color: white !important">Selengkapnya <i class="fas fa-arrow-circle-right text-white"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3 class="text-danger">2</h3>
                <p class="text-danger">Psikolog</p>
              </div>
              <div class="icon">
                <i class="ion ion-heart text-danger"></i>
              </div>
              <a href="#" class="small-box-footer bg-danger" style="color: white !important">Selengkapnya <i class="fas fa-arrow-circle-right text-white"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-white">
              <div class="inner">
                <h3 class="text-danger">65</h3>
                <p class="text-danger">Tipe Soal</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph text-danger"></i>
              </div>
              <a href="#" class="small-box-footer bg-danger" style="color: white !important">Selengkapnya <i class="fas fa-arrow-circle-right text-white"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <section class="connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-secondary">
                  <i class="fas fa-clock mr-1 text-secondary"></i>
                  Pengguna Terbaru
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
                            <th scope="col">Dibuat</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Johanes Ronaldo</td>
                                <td>10 Agustus 2022</td>
                                <td>johanesronaldo@gmail.com</td>
                              </tr>
                              <tr>
                                <td>Harry Maguire</td>
                                <td>09 Agustus 2022</td>
                                <td>maguire@gmail.com</td>
                              </tr>
                              <tr>
                                <td>Mr. Squarepants</td>
                                <td>08 Agustus 2022</td>
                                <td>spongebob@gmail.com</td>
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
