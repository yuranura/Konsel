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
                           
                            <th scope="col">Jawaban</th>
                            
                           
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($pertanyaan as $item)
                                            <tr>

                                                <td>{{ $item->pertanyaan }}</td>
                                            
                                            </tr>
                                        @endforeach
                        </tbody>
                      </table>
                   </div>
                </div>
              </div><!-- /.card-body -->
            </div>

            {{-- modal tes jawaban --}}
           {{-- <div class="modal fade" id="TesModal" tabindex="-1" aria-labelledby="TesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TesModalLabel">Jawaban</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
            </div>
        </div>
    </div> --}}
        </section>
    </section>
    <!-- /.content -->
  </div>
@endsection('container')
