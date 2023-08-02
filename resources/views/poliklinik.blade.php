<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
    @vite('resources/sass/app.scss')
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
    @include('layouts.nav')
    <br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4 ms-3">
        <div class="card text-center mb-3 ms-auto me-1 px-4 bg-primary" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
                <div class="text-light">
                    <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/gigi.jpg') }}" alt="image">
                    <p style="text-align:justify;">Poli Umum merupakan salah satu dari jenis layananyang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan</p>
                </div>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 px-4 ms-auto bg-primary" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
              <div class="text-light">
                <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/mata.jpg') }}" alt="image">
                <p style="text-align:justify;">Poli Umum merupakan salah satu dari jenis layananyang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan</p>
            </div>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 px-4 ms-auto me-auto bg-primary" style="width: 18rem;">
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
    <div class="row row-cols-1 row-cols-md-3 g-4 ms-4 ">
        <div class="card text-center mb-3 bg-primary mx-auto me-5 " style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
                <div class="text-light">
                    <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/jantung.jpg') }}" alt="image">
                    <p style="text-align: justify">Poli Jantung adalah klinik yang menangani hal-hal yang berkaitan dengan jantung dan pembuluh darah, atau kardiovaskuler, Orang biasanya akan datang ke Poliklinik Jantung & Pembuluh darah, karena berkaitan dengan pencegahan, diagnosis, dan pengobatan berbagai penyakit kardiovaskular, mulai dari tekanan darah tinggi hingga serangan jantung</p>
                </div>
            </div>
        </div>
        <div class="card text-center mb-3 ms-3 bg-primary mx-auto ms-5" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title text-light">Poliklinik</h5>
                <div class="text-light">
                    <img class="img-thumbnail mb-4" src="{{ Vite::asset('resources/images/anak.jpg') }}" alt="image">
                    <p style="text-align: justify">Poli Anak adalah layanan kesehatan untuk anak sejak dia dilahirkan hingga berusia 18 tahun. Tidak hanya berfokus pada aspek penunjang kesehatan yang dibutuhkan anak, namun juga gangguan kesehatan pada anak, penyakit, kelainan, alergi dan yang lainnya yang dapat mengganggu tumbuh kembang anak</p>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>
