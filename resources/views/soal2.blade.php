@extends('layouts.appsoal')

@section('content')
<section class="py-5" style="margin-bottom: 2em">
    <div class="container">
        <div class="card card2 mx-auto" style="width: 30rem" >
            <img class="mt-5 mx-auto" src="{{asset ('/templete/assets/img/board.png')}}" width="70%" alt="">
            <div class="card-body" >
             <div class="">
                      <div class="mb-4">
                        <div style="font-family: poppins">
                          <div class="">
                            <div class="text-center" style="font-size: 20px">
                              <p>Kamu akan menjawab beberapa pertanyaan, <span class="text-danger"><b>Tes ini hanya dilakukan 1x</b></span> jawablah paling sesuai dengan dirimu</p>
                          </div>
                          </div>
                          {{-- <b class="fs-lg-1 mb-0 text-center" style="color:#D32E50">Sebelum mulai, pastikan kondisi anda saat ini seperti dibawah ini</b><br> --}}
                           
                        </div>
                      </div>
                    </div>
                    <div class="mt-md-4">
                      <a href="{{url  ('/pertanyaan/1')}} " class="card-link btn btn-danger rounded-pill" style="margin-left: 188px">Mulai</a>
                    </div>
              
              </div>
             </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</section>
@endsection