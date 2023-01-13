<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name') }} - @yield('title')</title>
        <link href="{{ asset('templete/css/styles.css')}}" rel="stylesheet" />
        
        <link href="{{ asset('templete/css/user.min.css')}}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" >
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <script src="{{asset('templete/js/user.js')}}" ></script>
    </head>

    <div id="app">
        @include('layouts.partials.navbar')
        
        <main class="">
            @yield('content')
        </main>
    </div>
    
    </html>
