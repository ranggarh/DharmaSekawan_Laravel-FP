<!DOCTYPE html>
<html lang="en">
<head>

     <title>apa aja dlu</title>
     <meta charset="UTF-8">
     {{-- <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="style">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css')!!}">
     <link rel="stylesheet" href="{!! asset("css/font-awesome.min.css")!!}">
     <link rel="stylesheet" href="{!! asset('css/animate.css')!!}">
     <link rel="stylesheet" href="{!! asset ('css/owl.carousel.css')!!}">
     <link rel="stylesheet" href={!! asset("css/owl.theme.default.min.css")!!}>

     <!-- MAIN CSS -->
     <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
     @vite('resources/sass/app.scss') --}}

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dharma Sekawan</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- As a heading -->
    <div class="p-3 bg-primary text-white">
        <div class="container-fluid">
            <span class="tekstentang navbar-brand mb-0 h1"><center>Selamat Datang di Situs Resmi Pendaftaran Pasien Online Klinik Dharma Sekawan</center></span>
        </div>
    </div>

    <nav class="tekstentang navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="img-fluid" style="width: 55px;" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
            <a class="navbar-brand" href="#">Klinik Dharma Sekawan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex flex-row flex-wrap ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Poliklinik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary me-3 ms-2" type="button" href="#">Pendaftaran</button>
                    </li>
                </ul>
          </div>
        </div>
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/home2.jpg') }}" alt="image">
            </div>
            <div class="carousel-item">
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/home5.jpg') }}" alt="image">
            </div>
            <div class="carousel-item">
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/home6.jpg') }}" alt="image">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="mb-2 bg-light text-dark">
        <br><br>
        <div class="teks">
            <h4 style="font-weight: bold"><center>Klinik Kesehatan Dharma Sekawan</center></h4>
            <h1 style="font-weight: bold"><center>Pelayanan</center></h1>
            <h3 style="font-weight: bold"><center>Poliklinik</center></h3>
            <h5 style="font-weight: bold"><center>Silakan Klik Poliklinik yang Akan Dipilih!</center></h5>
    </div>
    <br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4 ms-5">
        <div class="card text-center mb-3 bg-primary" style="width: 14rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/gigi.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/mata.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/umum.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/jantung.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14em;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/anak.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
    </div>

    <br><br>
    {{-- FOOTER --}}
        <div class="foot mt-5 text-light"><hr>
            <div class="py-2" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb-5">
                            <a href="" class="logo text-decoration-none">
                                <div class="d-flex">
                                    <img class="img-fluid" style="width: 150px;" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
                                </div>
                            </a>
                            <div class="tekstentang mt-2 text-light">
                                <small>Copyright © 2023 Dharma Sekawan. All rights reserved</small>
                            </div>

                        </div>
                        <div class="tekstentang col-6 col-lg-2 offset-lg-1 mb-5 ms-5">
                            <h5>Tautan Penting</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="">Beranda</a></li>
                                <li class="mb-2"><a href="">Tentang</a></li>
                                <li class="mb-2"><a href="">Dokter</a></li>
                                <li class="mb-2"><a href="">Poliklinik</a></li>
                            </ul>
                        </div>
                        <div class="tekstentang col-4 col-lg-3 offset-lg mb-5 ms-0 me-3">
                            <h5>Kontak Kami</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <a href=""><i class="bi bi-github me-3" style="size"></i></a>
                                    <a href=""><i class="bi bi-instagram me-3"></i></a>
                                    <a href=""><i class="bi bi-whatsapp me-3"></i></a>
                                    <a href=""><i class="bi bi-telephone me-3"></i></a>
                                    <a href=""><i class="bi bi-envelope me-3"></i></a>
                                </li>
                            </ul>
                            <p>Jl. Ketintang No.156, Gayungan, Surabaya, Jawa Timur 60231</p>
                        </div>
                        <div class="tekstentang col-4 col-lg-3 offset-lg-1 mb-5 ms-4">
                            <h5>Jam Operasional</h5>
                            <ul class="list-unstyled">
                                <li>1. Senin - Kamis (08.00 - 16.00)</li>
                                <li>2. Jumat (08.00 - 14.00)</li>
                                <li>3. Sabtu, Minggu, Hari Besar (Libur)</li>
                            </ul>
                        </div>
                        <section id="google-map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.385639464917!2d112.7260852738168!3d-7.310500771874553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sInstitut%20Teknologi%20Telkom%20Surabaya!5e0!3m2!1sen!2sid!4v1689845017537!5m2!1sen!2sid" width="1130" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <br><br>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    {{-- END FOOTER --}}
    @vite('resources/js/app.js')
</body>
</html>
