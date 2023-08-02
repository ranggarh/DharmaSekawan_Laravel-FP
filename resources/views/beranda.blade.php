<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Beranda | Klinik Dharma Sekawan</title>
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    <link href="/assets/css/style.css" rel="stylesheet">
    @vite('resources/sass/app.scss')
</head>
<body>
    <!-- As a heading -->
    <div class="p-2 bg-primary text-white">
        <div class="container-fluid">

            <span class="tekstentang navbar-brand mb-0 h1"><marquee>Selamat datang di situs resmi pendaftaran pasien online Klinik Dharma Sekawan | Kami hadir memberikan pelayanan kesehatan terbaik dengan memprioritaskan kebutuhan pasien dan keluarga. </marquee></span>
        </div>
    </div>

    @include('layouts.nav')

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
              <a href="{{route("poliklinik")}}" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/mata.jpg') }}" alt="image">
              <a href="{{route("poliklinik")}}" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/umum.jpg') }}" alt="image">
              <a href="{{route("poliklinik")}}" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/jantung.jpg') }}" alt="image">
              <a href="{{route("poliklinik")}}" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 14em;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <img class="img-thumbnail" src="{{ Vite::asset('resources/images/anak.jpg') }}" alt="image">
              <a href="{{route("poliklinik")}}" class="btn btn-primary mt-4" style="width: 10rem;">Selengkapnya</a>
            </div>
        </div>
    </div>

    <br><br>
    @include('layouts.footer')
    @vite('resources/js/app.js')
</body>
</html>
