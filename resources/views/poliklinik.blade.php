<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poliklinik</title>
    @vite('resources/sass/app.scss')
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="img-fluid" style="width: 55px;" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
            <a class="navbar-brand" href="#">Klinik Dharma Sekawan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex flex-row flex-wrap ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Poliklinik</a>
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
    <div></div>
    <div class="row row-cols-1 row-cols-md-3 g-4 ms-5">
        <div class="card text-center mb-3 ms-4 bg-primary" style="width: 23rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
                <div class="text-light">
                    <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/gigi.jpg') }}" alt="image">
                    <p style="text-align:justify;">Poli Umum merupakan salah satu dari jenis layananyang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan</p>
                </div>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 23rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <div class="text-light">
                <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/mata.jpg') }}" alt="image">
                <p style="text-align:justify;">Poli Umum merupakan salah satu dari jenis layananyang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan</p>
            </div>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary" style="width: 23rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <div class="text-light">
                <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/umum.jpg') }}" alt="image">
                <p style="text-align:justify;">Poli Umum merupakan salah satu dari jenis layananyang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan</p>
            </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4 ms-5 ">
        <div class="card text-center mb-3 bg-primary mx-auto me-5 " style="width: 23rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
                <div class="text-light">
                    <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/jantung.jpg') }}" alt="image">
                    <p style="text-align: justify">Poli Jantung adalah klinik yang menangani hal-hal yang berkaitan dengan jantung dan pembuluh darah, atau kardiovaskuler, Orang biasanya akan datang ke Poliklinik Jantung & Pembuluh darah, karena berkaitan dengan pencegahan, diagnosis, dan pengobatan berbagai penyakit kardiovaskular, mulai dari tekanan darah tinggi hingga serangan jantung</p>
                </div>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary mx-auto ms-5" style="width: 23rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
                <div class="text-light">
                    <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/anak.jpg') }}" alt="image">
                    <p style="text-align: justify">Poli Anak adalah layanan kesehatan untuk anak sejak dia dilahirkan hingga berusia 18 tahun. Tidak hanya berfokus pada aspek penunjang kesehatan yang dibutuhkan anak, namun juga gangguan kesehatan pada anak, penyakit, kelainan, alergi dan yang lainnya yang dapat mengganggu tumbuh kembang anak</p>
                </div>
            </div>
        </div>
    </div>
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
</body>
</html>
