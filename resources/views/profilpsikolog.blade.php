@extends('layouts.app')

@section('content')
<section style="margin-top:4em">
    <div class="container py-5 ">
        <div class=" justify-content-center text-center">
            <h2 class="fs-2 fs-lg-2"  style="font-size: 48px; font-family: Poppins"> <b>Kenal Lebih Dekat Lawan Bicara Kamu</b> </h2>
            <p class="px-lg-4 mt-3"  style="font-size: 20px; font-family: Poppins">Dari semua psikolog di konsel, mungkin kamu cocok dengan ini </p>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
    </div>
</section>
<section>
    <div class="container">
        <table class="table table-borderless">
            <tr>
                <td>
                    <div class="card mb-2 border-2 mx-auto" style="max-width:800px;">
                        <div class="row g-0" style="margin-left:40px;">
                            <div class="col-md-4">
                                <img  src=" {{ asset ('templete/assets/img/psikolog1.png') }}" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8" style="font-family: Poppins">
                                <div class="card-body">
                                    <h4 class="card-header"> Narasimha, S.Psi., M.Psi </h4>
                                    <h5 class="mt-2 rounded-pill py-2 text-center bg-secondary text-white" style="width: 45%" >Psikolog Umum</h5>
                                    <div class="row">
                                        <div class="col-6 mt-3">
                                            <h6 class="card-text"><b> Psikolog</b></h6>
                                            <h6 class="card-text">Pengalaman: 8-12 tahun</h6>
                                        </div>
                                        <div class="col-6 mt-2">
                                            <h6 class="card-text">SIPP: 26022010702</h6>
                                            <h6 class="card-text">
                                                <span class="fa fa-star" style="color:#FDE400"></span>
                                                <span class="fa fa-star" style="color:#FDE400"></span>
                                                <span class="fa fa-star" style="color:#FDE400"></span>
                                                <span class="fa fa-star" style="color:#FDE400"></span>
                                                <span class="fa fa-star"></span> 4
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="mt-4 " style="margin-left: 20em">
                                        <a class="btn-outline-danger btn rounded-pill" href="">Konsul</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</section>

<section class="py-3">
    <div class="container">
        <div class=" justify-content-center text-center">
            <h4 class=""  style="font-family: Poppins; font-size:25px"> <b>Profile</b> </h4>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div class="mt-2" style="font-family: Poppins; font-size:20px">
            <p>Memperoleh kualifikasi sebagai Psikolog Klinis dari Universitas Tarumanagara, Narashima percaya bahwa “If you don’t say what you think, you’re punishing yourself.” Melakukan percakapan secara terbuka merupakan proses yang penting dalam sesi konseling. Narasimha memiliki pengalaman dalam menangani masalah pada toxic relationship, depresi, Bulliying, kecemasan, pengendalian emosi, dan pencarian makna hidup. Sebagai konselor Konsel, Narasimha memiliki misi untuk membantu klien untuk meningkatkan kualitas hidupnya sehingga bisa lebih bermakna.</p>
        </div>
    </div>
</section>

<section class="py-3">
    <div class="container">
        <div class=" justify-content-center text-center">
            <h4 class=""  style="font-family: Poppins; font-size:25px"> <b>Pendidikan</b> </h4>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.1}' data-zanim-trigger="scroll" />
        </div>
        <div class="mt-2" style="font-family: Poppins; font-size:20px">
            <li  style="text-align:justify;">S2 Magister Psikologi Profesi Klinis Universitas Tarumanagara</li>
            <li  style="text-align:justify;">S1 Sarjana Psikologi Universitas Tarumanagara</li>
        </div>
    </div>
</section>
<section class="py-3 mb-5">
    <div class="container">
        <div class=" justify-content-center text-center">
            <h4 class=""  style="font-family: Poppins; font-size:25px"> <b>Layanan</b> </h4>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
        </div>
        <div class="mt-2" style="font-family: Poppins; font-size:20px">
            <p><i class="fas fa-check-circle" style="text-align:justify;"></i>  Psikolog rata-rata berusia 30 - 55 tahun</p>
            <p><i class="fas fa-check-circle" style="text-align:justify;"></i>  Pengalaman menangani klien > 5 tahun</p>
            <p><i class="fas fa-check-circle" style="text-align:justify;"></i>  Jumlah klien yang pernah ditangani >500 orang</p>
            <p><i class="fas fa-check-circle" style="text-align:justify;"></i>  Kasus yang biasa ditangani mencakup kategori basic & essential, adiksi, lansia, anak, keluarga, dll</p>
            <p><i class="fas fa-check-circle" style="text-align:justify;"></i>  Biaya Rp.349.000 per sesi</p>
        </div>
    </div>
</section>

@endsection