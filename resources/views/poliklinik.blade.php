<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poliklinik</title>
    @vite('resources/sass/app.scss')
</head>
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
<body>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
              <img src="{{ Vite::asset('resources/images/gigi.jpg') }}" alt="..." style="width: 250px; margin:auto; ">
              <div class="card-body">
                <br>
                <h5 class="card-title text-center">Poli Gigi</h5>
                <p class="card-text text-center ms-4 mb-4 me-4">Poli Gigi adalah bagian dari layanan kesehatan gigi dan mulut yang berfokus pada pencegahan, diagnosis, perawatan, dan perbaikan masalah gigi dan jaringan sekitarnya. </p>
              </div>
            </div>
          </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{ Vite::asset('resources/images/mata.jpg') }}" alt="..." style="width: 250px; margin:auto; ">
            <div class="card-body">
                <br>
              <h5 class="card-title text-center">Poli Mata</h5>
              <p class="card-text text-center ms-4 mb-4 me-4">Poli Mata adalah fasilitas atau bagian dari layanan kesehatan yang berfokus pada diagnosis, perawatan, dan pencegahan berbagai masalah kesehatan yang terkait dengan mata dan penglihatan. </p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100">
              <img src="{{ Vite::asset('resources/images/umum.jpg') }}" alt="..." style="width: 250px; margin:auto; ">
              <div class="card-body text-center">
                <br>
                <h5 class="card-title">Poli Umum</h5>
                <p class="card-text text-center ms-4 mb-4 me-4">Poli Umum merupakan salah satu dari jenis layananyang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.</p>
              </div>
            </div>
          </div>
          <div class="col mx-auto me-5">
            <div class="card h-100">
              <img src="{{ Vite::asset('resources/images/jantung.jpg') }}" alt="..." style="width: 250px; margin:auto; ">
              <div class="card-body">
                <br>
                <h5 class="card-title text-center">Poli Jantung</h5>
                <p class="card-text text-center ms-4 mb-4 me-4">Poli Jantung adalah klinik yang menangani hal-hal yang berkaitan dengan jantung dan pembuluh darah, atau kardiovaskuler, Orang biasanya akan datang ke Poliklinik Jantung & Pembuluh darah, karena berkaitan dengan pencegahan, diagnosis, dan pengobatan berbagai penyakit kardiovaskular, mulai dari tekanan darah tinggi hingga serangan jantung.</p>
              </div>
            </div>
          </div>
          <div class="col mx-auto ms-5">
            <div class="card h-100">
              <img src="{{ Vite::asset('resources/images/anak.jpg') }}" alt="..." style="width: 250px; margin:auto; ">
              <div class="card-body">
                <br>
                <h5 class="card-title text-center">Poli Anak</h5>
                <p class="card-text text-center ms-4 mb-4 me-4">Poli Anak adalah layanan kesehatan untuk anak sejak dia dilahirkan hingga berusia 18 tahun. Tidak hanya berfokus pada aspek penunjang kesehatan yang dibutuhkan anak, namun juga gangguan kesehatan pada anak, penyakit, kelainan, alergi dan yang lainnya yang dapat mengganggu tumbuh kembang anak.</p>
              </div>
            </div>
          </div>
      </div>
</body>
</html>
