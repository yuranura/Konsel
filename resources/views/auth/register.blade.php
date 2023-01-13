@extends('layouts.app')

@section('content')
<div class="d-flex flex-column">
    <img src="{{ asset('templete/assets/img/bglogin1.png') }}" style=" max-width: 100%; max-height: 100vh"  alt="">
    <div class=" position-absolute container " style="bottom:50px; left:130px ">
        <div class="container" style="margin-top: 100em">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card "  >
                        <div class="card-header">
                            <h2 class="text-danger" >{{ __('Register') }}</h2>
                        </div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
        
                                <div class="form-floating mb-3">
                                    <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name" >
                                    <label for="name" class="col-md-4 col-form-label text-md-start">{{ __('Name') }}</label>
        
                                    @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
        
                                </div>
        
                                {{-- <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
        
                                <div class="form-floating mb-3">
                                    <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com" >
                                    <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>
        
                                    @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
        
                                </div>


                                <div class="row g-2 mb-3">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input  id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" required autocomplete="tanggal" autofocus placeholder="tanggal" >
                                            <label for="tanggal" class="col-md-4 col-form-label text-md-start">{{ __('Tanggal Lahir') }}</label>
                
                                            @error('tanggal')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                    
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input  id="kota" type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ old('kota') }}" required autocomplete="kota" autofocus placeholder="kota" >
                                            <label for="kota" class="col-md-4 col-form-label text-md-start">{{ __('Asal Kota') }}</label>
                
                                            @error('kota')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                
                                        </div>
                                    </div>
                                  </div>

                               
        
                                {{-- <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="row g-2 mb-3">
                                    <div class="col-md">
                                        <div class="form-floating ">
                                            <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password" autofocus placeholder="password" >
                                            <label for="password" class="col-md-4 col-form-label text-md-start">{{ __('Password') }}</label>
                
                                            @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating ">
                                            <input  id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password" autofocus placeholder="password-confirmation" >
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-start">{{ __('Confirm Password') }}</label>
                
                                        </div>
                                    </div>
                                  </div>
                                {{-- <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div> --}}
                                
                                <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                                    
                                     <button type="submit" class="btn btn-danger">
                                        {{ __('Register') }}
                                    </button>
                                 </div>
        
                                {{-- <div class="row mb-0">
                                    <div class="col-md-6 ms-auto">
                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div> --}}
                            </form>
                        </div>
                        <div class="card-footer text-center py-3">
                            <div class="small"><a href="{{ route('login') }}">have an account? Go to login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
