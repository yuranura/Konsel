@extends('layouts.dashboard')

@section('title')
    login
@endsection

@section('content')
    
<body class="bg-holder overlay overlay-2" style="background-image:url( ../templete/assets/img/bglogin1.png ); width:100%;">
  <div class="p-3 mb-2 bg-white text-dark"  data-zanim-xs='{"delay":0,"duration":1}'>
    <a href="../landingpage.html"><img class="mx-auto d-block" src="../templete/assets/img/logo-konsel.png" alt="logo" /></a></div>
  <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
          <main>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-5">
                          <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <h2  class="text-start fs-0 fs-md-1 card-header  " style="color: #D32E50">
                              <b> SIGN IN </b>
                            </h2>
                              <div><h3 class="text-center font-weight-light mt-2 py-4" style="color: #D32E50" >Welcome Back!</h3></div>
                              <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                  @csrf          

                                      <div class="form-floating mb-3">
                                          <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                          <label for="inputEmail">Email address</label>

                                          @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror

                                      </div>
                                      <div class="form-floating mb-3">
                                          <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                          <label for="inputPassword">Password</label>

                                          @error('password')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                          @enderror

                                      </div>
                                     
                                      <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                         {{--<a class="small" href="password.html">Forgot Password?</a>--}} 
                                          {{--<a class="btn btn-danger" href="index.html">Login</a>--}}

                                          @if (Route::has('password.request'))
                                            <a class="small" href="{{ route('password.request') }}">
                                              {{ __('Forgot Your Password?') }}
                                            </a>
                                          @endif

                                          <button type="submit" class="btn btn-danger">
                                            {{ __('Login') }}
                                        </button>
                                      </div>
                                  </form>
                              </div>
                              <div class="card-footer text-center py-3">
                                  <div class="small"><a href="{{ route('register') }}">Need an account? Sign up!</a></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </main>
      </div>
      <div id="layoutAuthentication_footer">
          
          <footer class="py-4 bg-light mt-auto">
              <div class="container-fluid px-4">
                  <div class="d-flex align-items-center justify-content-between small">
                      <div class="text-muted">Copyright &copy; UNICAM KONSEL 2022</div>
                      <div>
                          <a href="#">Privacy Policy</a>
                          &middot;
                          <a href="#">Terms &amp; Conditions</a>
                      </div>
                  </div>
              </div>
          </footer>
      
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="{{asset('templete/js/scripts.js')}}"></script>
</body>


@endsection