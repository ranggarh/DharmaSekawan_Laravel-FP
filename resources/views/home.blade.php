<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dharma Sekawan</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- As a heading -->
    <div class="p-3 bg-primary text-white">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1"><center>Selamat Datang di Situs Resmi Pendaftaran Pasien Online Klinik Dharma Sekawan</center></span>
        </div>
    </div>

    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
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
                        <form class="container-fluid justify-content-start">
                        <button class="btn btn-primary" type="button" href="#">Pendaftaran</button>
                        </form>
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
    <div class="p-3 mb-2 bg-secondary text-light">
        <br><br>
        <div class="teks">
            <h4><center>Klinik Kesehatan Dharma Sekawan</center></h4>
            <h1><center>Pelayanan</center></h1>
            <h3><center>Poliklinik</center></h3>
            <h5><center>Silakan Klik Poliklinik yang Akan Dipilih!</center></h5>
    </div>
    <br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="card text-center mb-3" style="width: 15.65rem;">
            <div class="card-body">
              <h5 class="card-title">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/gigi.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary" style="width: 11.5rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3" style="width: 15.65rem;">
            <div class="card-body">
              <h5 class="card-title">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/mata.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary" style="width: 11.5rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3" style="width: 15.65rem;">
            <div class="card-body">
              <h5 class="card-title">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/umum.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary" style="width: 11.5rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3" style="width: 15.75rem;">
            <div class="card-body">
              <h5 class="card-title">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/jantung.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary" style="width: 11.5rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3" style="width: 15.75rem;">
            <div class="card-body">
              <h5 class="card-title">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/anak.jpg') }}" alt="image">
              <a href="#" class="btn btn-primary" style="width: 11.5rem;">Selengkapnya</a>
            </div>
        </div>
    </div>
    <br><br>

    <!-- Footer -->
    {{-- <footer id="footer" class="py-5">
        <div class="container">
            <div class="row  py-lg-5">
                <div class="col-lg-3 col-sm-6 footer-logo">
                    <h5>about us</h5>
                    <h2>
                        <a href="index.html">
                            Precedence
                            <span>improving lives</span>
                        </a>
                    </h2>
                    <p class="mt-3">Nulla quis lorem ut libermalesuada ultrices posuere cubilia feugiatrice praesent sapien massa</p>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-double-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="#about" class="scroll">
                                <i class="fa fa-angle-double-right"></i>About</a>
                        </li>
                        <li>
                            <a href="#services" class="scroll">
                                <i class="fa fa-angle-double-right"></i>Services</a>
                        </li>
                        <li>
                            <a href="#blog" class="scroll">
                                <i class="fa fa-angle-double-right"></i>Articles</a>
                        </li>
                        <li>
                            <a href="#contact" class="scroll">
                                <i class="fa fa-angle-double-right"></i>Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6 footer_grid1 mt-lg-0 mt-4">
                    <h5>Address</h5>
                    {{-- <div class="fv3-contact">
                        {!! $alamat->alamat !!}
                    </div> --}}
                {{-- </div>
            </div>
        </div>
    </footer>
    <div class="cpy-right text-center py-4">
        <p>© 2018 Precedence. All rights reserved | Design by
            <a href="http://w3layouts.com"> W3layouts.</a>
        </p>
    </div>
</div> --}}
<!-- /Footer -->

    <div class="p-3 mb-2 bg-light text-dark">
    <div class="container">
        <div class="row divide"style="margin-bottom: 0px; margin-top: 10px;">
<!--logo and copyright-->
            <p align="center">
            2023 © <a href="https://ittelkom-sby.ac.id/" target="_blank"> Dharma Sekawan</a>
            by <a href="https://ittelkom-sby.ac.id/">Kelompok 3</a> |
                <a href="https://ittelkom-sby.ac.id/" target="_blank"> Follow Us</a> |
                Build with <a href="http://laravel.com" target="_blank"> Laravel </a> |
                Publication on <a href="https://github.com/ranggarh/DharmaSekawan_Laravel-FP/tree/main" target="_blank">Github</a>
                <br/>
                    <a href="https://www.instagram.com/"><i class="fa fa-angle-double-right">Instagram</a> |
                    <a href="https://twitter.com/">Twitter</a> |
                    <a href="https://ittelkom-sby.ac.id/">Website</a> |
                    <a href="https://www.whatsapp.com/">WhatsApp</a>
            </p>
        </div>
    </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>
