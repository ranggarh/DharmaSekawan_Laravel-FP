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
        <div class="teks">
            <h4><center>Klinik Kesehatan Dharma Sekawan</center></h4>
            <h1><center>Pelayanan</center></h1>
            <h3><center>Poliklinik</center></h3>
            <h5><center>Silakan Klik Poliklinik yang Dipilih!</center></h5>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
        <div class="card h-100">
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/gigi.jpg') }}" alt="image">
            <div class="card-body">
            <h5 class="card-title">Poli Gigi</h5>
            </div>
            <div class="card-footer">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card h-100">
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/mata.jpg') }}" alt="image">
            <div class="card-body">
            <h5 class="card-title">Poli Mata</h5>
            </div>
            <div class="card-footer">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        </div>
        <div class="col">
        <div class="card h-100">
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/umum.jpg') }}" alt="image">
            <div class="card-body">
            <h5 class="card-title">Poli Umum</h5>
            </div>
            <div class="card-footer">
            <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
        </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
