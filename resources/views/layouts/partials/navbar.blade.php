<section>
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top d-flex shadow-sm">
        <div class="container">
            <a class="navbar-brand me-auto" href="{{ url('/') }}">
               <img src="{{ asset('templete/assets/img/logo-konsel.png') }}" alt="">
            </a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"> --}}
                {{-- <span class="navbar-toggler-icon"></span> --}}
            {{-- </button> --}}
            <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavbarCollapse" aria-controls="primaryNavbarCollapse" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="hamburger hamburger--emphatic">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                @guest
                @if (Route::has('login'))


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="btn btn-outline-danger rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3 nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger btn-hover btn rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                </ul>
                        @endif
                    @else
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav " style="margin-left: 17em">
                        <li class="nav-item" >
                            <a class="nav-link" href="{{route('service')}}">Services</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="">Contact</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link" href="">Help</a>
                        </li>
                    </ul>
                @endguest
                @if(Auth::user())
                
                <div class="dropdown ms-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                        {{-- <li>
                            <a class="btn btn-danger btn-hover rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/quiz" target="_blank">Get Started</a>
                        </li> --}}
                </div>
                @endif
            </div>
        </div>
    </nav>
    <script src="{{asset('templete/js/user.js')}}"></script>
  </section>
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
              {{-- <a class="btn btn-outline-danger rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/login" target="_blank">Login</a> --}}
              {{-- <ul class="navbar-nav ms-auto"> --}}
                <!-- Authentication Links -->
                {{-- @guest --}}
                    {{-- @if (Route::has('login')) --}}
                        {{-- <li class="nav-item"> --}}
                            {{-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                        {{-- </li> --}}
                    {{-- @endif --}}

                    {{-- @if (Route::has('register')) --}}
                        {{-- <li class="nav-item"> --}}
                            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                        {{-- </li> --}}
                    {{-- @endif --}}
                {{-- @else --}}
                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a> --}}

                        {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a> --}}

                            {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
              <a class="btn btn-danger btn-hover rounded-pill btn-sm border-2 d-block d-lg-inline-block ms-auto my-3 my-lg-0 mx-3" href="/quiz" target="_blank">Get Started</a>
          </p>
      </div>
  </nav>            
  </section> --}} 

