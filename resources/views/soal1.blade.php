@extends('layouts.appsoal')

@section('content')
    <section class="py-5" style="margin-bottom: 2em">
        <div class="container">
            <div class="card card2 mx-auto" style="width: 30rem" >
                <div class="card-body" >
                 <div class="">
                          <div class="mb-4">
                            <div style="font-family: poppins">
                              <div class="card-header">
                                <div class="text-danger text-center" style="font-size: 20px">
                                  <p><b> Sebelum mulai, pastikan kondisi anda saat ini seperti dibawah ini</b></p>
                              </div>
                              </div>
                                <div class="row d-md-flex mb-md-2 mt-md-3">
                                  <div class="col-2 col-md-2">
                                    <iconify-icon icon="material-symbols:check-box-outline" style="font-size: 25px"></iconify-icon>
                                  </div>
                                  <div class="col text-start d-md-flex">
                                    <p style="height: 14px; font-size: 16px; font-family: Poppins">
                                      Jawab pertanyaan dengan Jujur<br />
                                    </p>
                                  </div>
                                </div>
                                
                                <div class="row mb-md-2 mt-md-4">
                                  <div class="col-2 col-md-2">
                                    <iconify-icon icon="bx:check-shield" style="font-size: 25px"></iconify-icon>
                                  </div>
                                  <div class="col text-start">
                                    <p style="height: 14px; font-size: 16px; font-family: poppins">Pastikan kamu berada di tempat yang Kondusif<br /></p>
                                  </div>
                                </div>
                                <div class="row mb-md-2 mt-md-4">
                                  <div class="col-2 col-md-2">
                                    <iconify-icon icon="material-symbols:safety-check-outline-rounded"  style="font-size: 25px"></iconify-icon>
                                  </div>
                                  <div class="col text-start d-md-flex">
                                    <p style="height: 14px; font-size: 16px; font-family: Poppins">
                                      Kamu bisa mengulangi Test ketika kamu mendapatkan Hasil<br />
                                    </p>
                                  </div>
                                </div>
                              {{-- <b class="fs-lg-1 mb-0 text-center" style="color:#D32E50">Sebelum mulai, pastikan kondisi anda saat ini seperti dibawah ini</b><br> --}}
                               
                            </div>
                          </div>
                        </div>
                        <div class="mt-md-5">
                          <a href="{{route ('soal2')}}" class="card-link btn btn-danger rounded-pill" style="margin-left:170px">Berikutnya</a>
                        </div>
                  
                  </div>
                 </div>
        </div>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </section>
@endsection