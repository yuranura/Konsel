 @extends('layouts.appsoal')

 @section('content')
     <section class="py-5" style="margin-bottom: 2em">
         <div class="container" style="font-family: poppins">
             <div class="text-center" style="font-size: 24px">
                 <p>{{ $test_id }} dari 27 soal</p>
                 <div class="progress" id="ProgressBar">
                     <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar"
                         aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width:{{ $persent }}%"></div>
                 </div>
             </div>
             <div class="text-center mt-5" style="font-size: 24px">
                 @foreach ($test as $test)
                     <p>{{ $test->name }}</p>
                 @endforeach
                 <p>{{ $test->deskripsi }}</p>
             </div>
    <form method="POST" href={{ route('save.jawaban', $next) }} >
    @csrf
             @forelse ($pertanyaan as $pertanyaan)
                     <div class="" style="font-family: poppins; font-size: 24px; margin-left:20em;">
                         
                             <td>
                                 @if ($test->tipe_soal_id == 2)
                                 <input class="form-check-input my-auto" type="checkbox" value="" id="imageCheck">
                                 <label class="form-check-label" for="imageCheck">
                                     <img src="/storage/img/{{ $pertanyaan->pertanyaan }}" class="text-center" width="70%">
                                @elseif($test->tipe_soal_id == 3)
                                <input class="form-check-input my-auto" type="checkbox" value="" id="imageCheck">
                                 <label class="form-check-label" for="imageCheck">
                                     {{ $pertanyaan->pertanyaan }}
                                 @else
                                 <input class="form-check-input my-auto" type="checkbox" value="" id="defaultCheck">
                                 <label class="form-check-label" for="defaultCheck">
                                     {{ $pertanyaan->pertanyaan }}
                                 @endif
                             </td>
                         </label>
                     </div>
                 @empty
                     <div class="alert alert-danger">
                         Data Post belum Tersedia.
                     </div>
             @endforelse
             <div class="d-flex justify-content-center -bottom-3mt-md-4">
                 @if ($last)
                     <a href="/" class="card-link btn btn-danger rounded-pill" style="margin-left: 7em">Kirim</a>
                 @else
                     <a href="{{ url('/pertanyaan', $next) }}" class="card-link btn btn-danger rounded-pill mt-3">Berikutnya</a>
                 @endif
             </div>
         </div>
        </form>
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"
             integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
         <script>
             $('input[type=checkbox]').on('change', function(evt) {
                 if ($('input[id=defaultCheck]:checked').length >= 4) {
                     this.checked = false;
                     alert('Hanya boleh memilih maksimal 3 kategori !');
                    }
                 if($('input[id=imageCheck]:checked').length >=2){
                    this.checked= false;
                    alert('hanya boleh memilih 1 !');
                 } 
                 
             });
         </script>

         <script>
             //message with toastr
             @if (session()->has('success'))

                 toastr.success('{{ session('success') }}', 'BERHASIL!');
             @elseif (session()->has('error'))

                 toastr.error('{{ session('error') }}', 'GAGAL!');
             @endif
         </script>
         
         <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
             integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
         </script>
     </section>
 @endsection
