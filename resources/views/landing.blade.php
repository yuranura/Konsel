@extends('layouts.dashboard')

@section('title')
    Landing
@endsection

@section('content')
    <body>
        {{-- <section>
          <nav class="navbar navbar-expand-lg bg-white fixed-top d-flex container-fluid ">
            <a class="navbar-brand mx-5" href="/">
                <img src="../templete/assets/img/logo-konsel.png" alt="logo" />
            </a>
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger hamburger--emphatic">
                    <span class="hamburger-box">
                        <span class="hamburger-inner">
                        </span>
                    </span>
                </span>
            </button>
            <div class="collapse navbar-collapse mx-5" id="primaryNavbarCollapse">
                <p class="d-block d-lg-inline-block ms-auto my-3 my-lg-0">
                    <a class="btn btn-outline-danger rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/login" target="_blank">Login</a>
                    <a class="btn btn-danger btn-hover rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/quiz" target="_blank">Get Started</a>
                </p>
            </div>
        </nav>            
        </section> --}}
        
        <section style="font-family: font-family :Poppins;">
          <div class="bg-image" >
           <div class="container">

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner ">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-sm-2 col-lg-8">
                      <div style="margin-top: 20em">
                        <h1 class="fs-4 fs-md-4 lh-1 text-black" > <b style=" font-size: 65px"> Pahami Kepribadiaan Anda</b> </h1>
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-2 col-lg-8">
                      <div  style="margin-top: 20em">
                        <h1 class="fs-4 fs-md-4 lh-1 text-black" > <b style=" font-size: 65px"> Tentukan Arah Masa Depan Anda</b> </h1>
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-sm-2 col-lg-8">
                      <div  style="margin-top: 20em">
                        <h1 class="fs-4 fs-md-4 lh-1 text-black" > <b style=" font-size: 65px">Konsel Siap Membantu</b> </h1>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="overflow-hidden" >
                <p class="d-block d-lg-inline-block ms-auto my-3 my-lg-0 py-3">
                  <a class="btn btn-danger btn-hover rounded-pill btn-lg border-5 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="{{ route ('login') }}" >Mulai</a>
              </p>
              </div>

               
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin-top: 15em; margin-left:3em">
                <span class="carousel-control-next-icon next-icon" aria-hidden="true"></span>
                <span class="">Next</span>
              </button> 
              
            </div>

            {{-- <div class="row min-vh-100 py-8 align-items-center" data-inertia='{"weight":1.5}'>
              <div class="col-sm-2 col-lg-8 px-5 px-sm-3">
                  <div class="overflow-hidden" >
                      {{-- <h1 class="fs-4 fs-md-4 lh-1 text-black" > <b style=" font-size: 48px"> Kerjakan tes sekarang dan dapatkan rekomendasi dari <span class="text-danger">Konsel</span> tentang kemampuanmu.</b> </h1>  --}}
                      {{-- <p class="text-white">Periksa sekarang kesahatan mental anda dengan psikolog profesional kami, layanan fasilitas yang lengkap dan modern.</p> --}}
                      {{-- <p class="d-block d-lg-inline-block ms-auto my-3 my-lg-0 py-3"> --}}
                        {{-- <a class="btn btn-danger btn-hover rounded-pill btn-lg border-5 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/quiz" target="_blank">Mulai</a> --}}
                    {{-- </p> --}}
                  {{-- </div> --}}
                  {{-- </div> --}}
              {{-- </div> --}} 
              
            </div>
           </div>
          </div>
        </section>

        <section style="padding-top: 7em; padding-bottom:7em">
            
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
        
        
        @include('layouts.partials.footer')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
@endsection