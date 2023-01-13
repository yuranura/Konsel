@extends('layouts.app')

@section('content')

<section style="font-family: font-family :Poppins;">
    <div class="container py-5" style="margin-top: 5em">
        <div class="row justify-content-center text-center">
            <h5 data-zanim-xs='{"delay":0}'>Psikolog Pilihan</h5>
            <div>
                <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":2,"width":"8rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
        </div>
        <table class="table table-borderless">
            <tr>
                <td>
                    <div class="card mb-3 border-2 mx-auto" style="max-width:540px;">
                        <div class="row g-0" style="margin-left:40px;">
                            <div class="col-md-4">
                                <img  src=" {{ asset ('templete/assets/img/psikolog1.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-subtitle mb-2 text-muted col-sm-11 rounded-pill py-1 text-center bg-400 text-white">Psikolog Umum<span class="text fs-lg-1 mb-0"></span></h5>
                                    <h4 class="card-title">Narasimha, S.Psi., M.Psi</h4>
                                    <h6 class="card-text">Pengalaman: 8-12 tahun</h6>
                                    <h6 class="card-text">
                                        <span class="fa fa-star" style="color:#FDE400"></span>
                                        <span class="fa fa-star" style="color:#FDE400"></span>
                                        <span class="fa fa-star" style="color:#FDE400"></span>
                                        <span class="fa fa-star" style="color:#FDE400"></span>
                                        <span class="fa fa-star"></span> 4
                                    </h6>
                                    <a class="btn-outline-danger btn rounded-pill" href="{{ route ('profilpsikolog')}}">Konsul</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</section>

@endsection
