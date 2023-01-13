@extends('layouts.app')

@section('content')

<section style="font-family: font-family :Poppins;">
    <div class="bg-image" >
     <!-- <img src="../templete/assets/img/landing.png" alt="">-->
     <div class="container">

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-sm-2 col-lg-8">
                <div style="margin-top: 15em">
                  <h1 class="fs-4 fs-md-4 lh-1 text-black" > <b  style=" font-size: 65px; font-family:Poppins"> Pahami Kepribadiaan Anda</b> </h1>
                </div>
              </div>
            </div> 
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-2 col-lg-8">
                <div  style="margin-top: 15em">
                  <h1 class="fs-4 fs-md-4 lh-1 text-black" > <b style=" font-size: 65px; font-family:Poppins">Tentukan Arah Masa Depan Anda</b> </h1>
                </div>
              </div>
            </div> 
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-sm-2 col-lg-8">
                <div  style="margin-top: 15em">
                  <h1 class="fs-4 fs-md-4 lh-1 text-black" > <b  style=" font-size: 65px; font-family:Poppins"> Konsel Siap Membantu</b> </h1>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="overflow-hidden" >
          <p class="d-block d-lg-inline-block ms-auto my-3 my-lg-0 py-3">
            <a class="btn btn-danger btn-hover rounded-pill btn-lg border-5 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="{{route ('soal1')}}">Mulai</a>
        </p>
        </div>

         
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin-top: 15em; margin-left:3em">
          <span class="carousel-control-next-icon next-icon" aria-hidden="true"></span>
          <span class="">Next</span>
        </button> 
        
      </div>
      </div>
     </div>
    </div>
  </section>

  <section class="py-3" style="font-family: font-family :Poppins;">
    <div class="container my-5">
        <div class=" justify-content-center text-center">
            <h2 class="fs-2 fs-lg-2"  style="font-size: 40px; font-family: Poppins"> <b>Periksalah Diri Anda Ke Ahlinya</b> </h2>
            <p class="px-lg-4 mt-3">Dapatkan konsultasi dan dukungan ahli dengan konsel, sebuah perusahaan penasihat yang selalu berdiri di sisi anda.</p>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
      {{-- <h1 class="text-center fs-4 fw-bold">Price List</h1> --}}
      <div class="row py-2">
        <div class="col-md-3 py-3">
          <div class="card shadow card1">
            <img
              src="{{ asset ('templete/assets/img/100.png') }}"
              class="card-img-product card-img-top"
              alt=""
            />
            <div class="card-body">
              <h4 class="card-title"><b>Take A Quick Assessment</b></h4>
              <p class="card-text">Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 py-3">
            <div class="card shadow card1">
                <img
                  src="{{ asset ('templete/assets/img/201.png') }}"
                  class="card-img-product card-img-top"
                  alt=""
                />
                <div class="card-body">
                  <h4 class="card-title"><b>Take A Quick Assessment</b></h4>
                  <p class="card-text">Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3 py-3">
            <div class="card shadow card1">
                <img
                  src="{{ asset ('templete/assets/img/300.png') }}"
                  class="card-img-product card-img-top"
                  alt=""
                />
                <div class="card-body">
                  <h4 class="card-title"><b>Take A Quick Assessment</b></h4>
                  <p class="card-text">Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.</p>
                </div>
              </div>
        </div>
        <div class="col-md-3 py-3">
            <div class="card shadow card1">
                <img
                  src="{{ asset ('templete/assets/img/400.png') }}"
                  class="card-img-product card-img-top"
                  alt=""
                />
                <div class="card-body">
                  <h4 class="card-title"><b>Take A Quick Assessment</b></h4>
                  <p class="card-text">Answer a few questions to help us understand your preverences to start therapy. you can invite your parner.</p>
                </div>
              </div>
        </div>
      </div>
    </div>
  </section>

  {{-- <section style="font-family: font-family :Poppins;" >
    <div class="container py-5" style="padding-top: 10em;">
        <iframe width="1100" height="550" src=" {{ url ('https://www.youtube.com/embed/jlWMTNZNOc0') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </section> --}}

  <section class="py-3" style="font-family: font-family :Poppins;">
    <div class="container">
        <div class=" justify-content-center text-center">
            <h2 class="fs-2 fs-lg-2"  style="font-size: 40px; font-family: Poppins"> <b>Terapis Profesional, Berlisensi, dan Berpengalaman</b> </h2>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
      {{-- <h1 class="text-center fs-4 fw-bold">Price List</h1> --}}
      <div class="row justify-content-center text-center py-2">
        <div class="col-md-6 py-3">
          <img src="{{ asset ('templete/assets/img/psikolog1.png') }}" alt="icon" >
        </div>
        <div class="col-md-6 py-3">
            <img src="{{ asset ('templete/assets/img/psikolog2.png') }}" alt="icon" >
        </div>
      </div>
      <div class="text-center" style="font-family: font-family :Poppins; font-size: 20px">
        <p>Berlisensi, terakreditasi, dan berpengalaman terbesar di Indonesia yang dapat membantu Anda 
            dengan berbagai masalah termasuk depresi, kecemasan, hubungan, trauma, kesedihan,
            dan banyak lagi. Dengan terapi kami, Anda mendapatkan profesionalisme dan kualitas yang sama 
            seperti yang Anda harapkan, dengan berkomunikasi kapan dan bagaimana anda inginkan.</p>
      </div>
    </div>
  </section>

  {{-- <section style="font-family: font-family :Poppins;">
    <div class="container py-3">
        <div class="row justify-content-center text-center">
            <h3 class="fs-2 fs-lg-2 text-black"><b>Terapis Profesional, Berlisensi, dan Berpengalaman</b> </h3>
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="" data-zanim-xs='{"delay":0}'class="overflow-hidden"><img src="{{ asset ('templete/assets/img/psikolog2.png') }}" alt="icon" height="200s" data-zanim-xs='{"delay":0}' /></div>
                        <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'></h5>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-5" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="" data-zanim-xs='{"delay":0}'><img src="{{ asset ('templete/assets/img/psikolog1.png') }}" alt="icon" height="200s" data-zanim-xs='{"delay":0}' /></div>
                        <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'></h5>
                    </div>
                </div>
                <p>Berlisensi, terakreditasi, dan berpengalaman terbesar di Indonesia yang dapat membantu Anda 
                   dengan berbagai masalah termasuk depresi, kecemasan, hubungan, trauma, kesedihan,
                   dan banyak lagi. Dengan terapi kami, Anda mendapatkan profesionalisme dan kualitas yang sama 
                   seperti yang Anda harapkan, dengan berkomunikasi kapan dan bagaimana anda inginkan.</p>
            </div>
            
    </div>
  </section> --}}

  <section style="font-family: font-family :Poppins;">
    <div class="container py-3">
        <div class=" justify-content-center text-center">
            <h2 class="fs-2 fs-lg-2"  style="font-size: 40px; font-family: Poopins"><b>Kenapa Harus Memilih Konsel</b> </h2>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div class="row">
            <div class="col-lg-6 pe-lg-3 py-3"><img class="rounded-3 img-fluid" src=" {{ asset ('templete/assets/img/bro.png') }}" alt="about" /></div>
            <div class="col-lg-6 px-lg-5  align-self-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-2" data-zanim-xs='{"delay":0}'>
                        <h5 class="text-black" style="font-size: 30px; font-family: Poppins"><img src=" {{ asset ('templete/assets/img/favicons/brainhealth.png') }}"><span class="fs-1 me-2" data-fa-transform="flip-h"></span><b> Pemeliharaan Mental</b></h5>
                        <p class="mt-3 text-black" style="font-size: 24px; font-family: Poppins">Tidak perlu khawatir, konsultasi tentang apa pun akan dijamin keamanannya.</p>
                    </div>
                </div>
                {{-- <div class="overflow-hidden">
                    <div class="px-4 px-sm-0" data-zanim-xs='{"delay":0}'>
                        <h5 class="fs-0 fs-lg-1 fs-1 text-black"> <img src="{{ asset ('templete/assets/img/favicons/brainhealth.png') }}"><span class="fs-1 me-2" data-fa-transform="flip-h"></span>Pemeliharaan Mental</h5>
                        <p class="mt-3 text-black">Konsel menyediakan berbagai jenis layanan kesehatan mental yang bisa diakses sesuai kebutuhanmu.</p>
                    </div>
                </div> --}}
                <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                        <h5 class=" text-black" style="font-size: 30px; font-family: Poppins"><img src=" {{ asset ('templete/assets/img/favicons/heartlock.png') }}"><span class="fs-1 me-2" data-fa-transform="flip-h"></span><b>Rahasia Terjamin</b> </h5>
                        <p class="mt-3 text-black" style="font-size: 24px; font-family: Poppins">Tidak perlu khawatir, konsultasi tentang apa pun akan dijamin keamanannya.</p>
                    </div>
                </div>
                <div class="overflow-hidden">
                    <div class="px-4 px-sm-0 mt-5" data-zanim-xs='{"delay":0}'>
                        <h5 class=" text-black" style="font-size: 30px; font-family: Poppins"><img src="{{ asset ('templete/assets/img/favicons/heartrate.png') }}"><span class="fs-1 me-2" data-fa-transform="grow-1"></span><b> Bebas Berekspresi</b></h5>
                        <p class="mt-3 text-black" style="font-size: 24px; font-family: Poppins">Bebas ceritakan masalahmu dari berbagai topik pada psikolog profesional berlisensi di konsel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  

  <section class="text-center">
    <div class="container py-3">
        <div class="text-center">
            <h3 class="fs-2 fs-md-3 text-black" style="font-size: 40px; font-family: Poppins"><b>Apa Yang Kamu Dapatkan</b> </h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/Dunia.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" style="font-size: 30px; font-family: Poppins" data-zanim-xs='{"delay":0.1}'><b>Akses Mudah</b> </h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" style="font-size: 24px; font-family: Poppins" data-zanim-xs='{"delay":0.2}'>Mudah karena dapat di akses di berbagai perangkat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src="{{ asset ('templete/assets/img/webdashboard.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" style="font-size: 30px; font-family: Poppins" data-zanim-xs='{"delay":0.1}'><b> Real Time Dashboard</b></h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" style="font-size: 24px; font-family: Poppins" data-zanim-xs='{"delay":0.2}'>Kondisi aktual yang dapat di pantau secara real time</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/projekmanager.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" style="font-size: 30px; font-family: Poppins" data-zanim-xs='{"delay":0.1}'><b> Projects Followup</b></h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" style="font-size: 24px; font-family: Poppins" data-zanim-xs='{"delay":0.2}'>Daftar kegiatan setelah tes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/gender.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" style="font-size: 30px; font-family: Poppins" data-zanim-xs='{"delay":0.1}'><b> Psycolog Recomendation</b></h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" style="font-size: 24px; font-family: Poppins" data-zanim-xs='{"delay":0.2}'>Rekomendasi psikolog terbaik</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/Sekolah.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black" style="font-size: 30px; font-family: Poppins" data-zanim-xs='{"delay":0.1}'><b> Schools Partnership</b></h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" style="font-size: 24px; font-family: Poppins" data-zanim-xs='{"delay":0.2}'>Daftar via sekolah</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="px-3 py-4 px-lg-4">
                    <div class="overflow-hidden"><img src=" {{ asset ('templete/assets/img/Medali.png') }}" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                    <div class="overflow-hidden">
                        <h5 class="mt-3 text-black"  style="font-size: 30px; font-family: Poppins" data-zanim-xs='{"delay":0.1}'><b> Certified Result</b></h5>
                    </div>
                    <div class="overflow-hidden">
                        <p class="mb-0 text-black" style="font-size: 24px; font-family: Poppins" data-zanim-xs='{"delay":0.2}'>Hasil tes bersertifikat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section style="margin-bottom: 3em">
    <div class="text-center">
        <h3 class="fs-2 fs-md-3 text-black" style="font-size: 40px; font-family: Poppins"><b>Cerita Mereka Yang Sudah Konseling</b> </h3>
        <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
    </div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        {{-- <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> --}}
        <div class="container" >
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <div class="row" style="font-family: Poppins">
                <div class="col-6">
                    <div style="margin-left:7em" >
                        <img src="{{ asset('templete/assets/img/client1.png') }}" alt="">
                        <div class="img-border"></div>
                    </div>
                </div>
                <div class="col-6 align-self-center ">
                    <h1><b>David Beckham</b></h1>
                    <p class="pt-2 ">As a sales gamification company, we were skeptical to work with a consultant to optimize our sales emails, but Elixir was highly recommended by many other Y-Combinator startups we knew. Elixir helped us run a ~6 week
                        email campaign.</p>
                        <h4>Chairman, Harmony Corporation.</h4>
                        
                </div> 
            </div>
            {{-- <img src="{{ asset('templete/assets/img/client1.png') }}" style="width: 80%; height:70vh" class="d-block w-100" alt="..."> --}}
            {{-- <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div> --}}
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row">
                <div class="col-6">
                    <div style="margin-left:7em" >
                        <img src="{{ asset('templete/assets/img/client2.png') }}" alt="">
                        <div class="img-border"></div>
                    </div>
                </div>
                <div class="col-6 align-self-center">
                    <h1><b>Maria Sharapova</b></h1>
                    <p class="pt-2">Writing case studies was a daunting task for us. We didn't know where to begin or what questions to ask, and clients never seemed to follow through when we asked. Elixir team did everything – with almost no time or
                        effort for me!.</p>
                        <h4>Managing Director, Themewagon Inc.</h4>
                </div> 
            </div>
            {{-- <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div> --}}
          </div>
          <div class="carousel-item">
            <div class="row">
                <div class="col-6">
                    <div style="margin-left:10em" >
                        <img src="{{ asset('templete/assets/img/client3.png') }}" alt="">
                        <div class="img-border"></div>
                    </div>
                </div>
                <div class="col-6 align-self-center ">
                    <h1><b>Michael Clarke</b></h1>
                    <p class="pt-2">Their work on our website and Internet marketing has made a significant different to our business. We’ve seen a 425% increase in quote requests from the website which has been pretty remarkable – but I’d always like
                        to see more!.</p>
                        <h4>CEO, A.E.T Institute.</h4>
                </div> 
            </div>
            {{-- <img src="..." class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div> --}}
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
  </section>

  <section class="py-5" style="margin-bottom: 3em">
    <div class="container">
        <div class="text-center">
            <h3 class="fs-2 fs-md-3 text-black" style="font-size: 40px; font-family: Poppins"><b>Partner</b> </h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            <img class="img-fluid" src="{{ asset('templete/assets/img/unicamstudio.png') }}" alt="harculis beards" data-zanim-xs="{}" />
        </div>
        </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
@endsection


