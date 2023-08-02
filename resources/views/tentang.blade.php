<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
    <link href="/assets/css/style.css" rel="stylesheet">
    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layouts.nav')
    <div class="" id="main" style="background-color:#7aa7b5">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-md-5 mt-5 order-md-2">
                    <img class="img-fluid" src="{{ Vite::asset('resources/images/tentang.jpg') }}" alt="main logo" style="width: 500px;">
                </div>
                <div class="col-md-7 order-md-1 py-5">
                    <div class="tekstentang">
                        <h1 class="judul">Klinik Dharma Sekawan</h1>
                        <p class="fs-9 mt-2">Klinik Dharma Sekawan didirikan pada tahun 1970.
                        Seiring dengan perkembangan dan penambahan pelayanan kepada pasien, Klinik Asma dan Alergi DR. Indrajana berubah nama menjadi KLINIK UTAMA DR. INDRAJANA CV. Klinik Dr. Indrajana yang melayani berbagai bidang spesialisasi. Saat ini kami melayani berbagai jenis spesialisasi antara lain Klinik Asma dan Alergi, Klinik Diabetes Endokrin dan Metabolik, Klinik Penyakit Dalam, Klinik Gizi, Klinik Gigi, Klinik Psikologi, Klinik Wound Care, Klinik Kulit dan Kelamin, Klinik Bedah Plastik dan Estetika, Klinik Nyeri dan Saraf Tulang Belakang, Klinik Obgyn dan Kandungan serta Klinik Ortopedi dan Traumatologi. Pasien adalah prioritas utama kami.  Dokter kami adalah para dokter mata terbaik di Indonesia dengan pengalaman bertahun-tahun dalam bidang keahliannya masing-masing untuk menangani berbagai gangguan mata seperti masalah di retina, katarak, LASIK, mata kering dry eye, glaukoma, mata juling trabismus, dan lain-lain. Dilengkapi dengan teknologi terdepan dalam layanan kesehatan mata di Indonesia, kami akan melayani dan menangani masalah kesehatan mata Anda dengan layanan sepenuh hati.</p>
                    </div>
                    {{-- <div class="row">
                        <div class="d-flex flex-column flex-md-row mt-4">
                            <a href="#"><img class="img-fluid me-3" src="{{ Vite::asset('resources/images/tentang.jpg') }}" alt="logo playstore" style="width: 140px;"></a>
                            <a href="#"><img class="img-fluid" src="{{ Vite::asset('resources/images/tentang.jpg') }}" alt="logo appstore" style="width: 140px;"></a>
                        </div>
                        <div class="d-flex flex-column flex-md-row mt-4">
                            <a href="#"><img class="img-fluid me-3" src="{{ Vite::asset('resources/images/tentang.jpg') }}" alt="logo playstore" style="width: 140px;"></a>
                            <a href="#"><img class="img-fluid" src="{{ Vite::asset('resources/images/tentang.jpg') }}" alt="logo appstore" style="width: 140px;"></a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <div class="mb-2 text-dark bg-light">
        <br>
        <div class="teks">
            <h2 style="font-weight: bold"><center>Klinik Kesehatan Dharma Sekawan</center></h2>
            <br>
            <h3 style="font-weight: bold"><center>Sarana & Prasarana</center></h3>
            <br>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col rounded-3">
          <div class="card d-flex flex-column flex-md-row">
            <img src="{{ Vite::asset('resources/images/fasilitas1.webp') }}" class="card-img-top ms-4 mt-4 me-4 mb-4" alt="..." style="width: 300px;">
            <div class="card-body me-1">
              <h5 class="card-title-top mt-4  ">Ruang Tunggu</h5>
              <p class="card-text">Menyediakan ruang tunggu yang nyaman dan bersih, sehingga penunggu tidak merasa bosan.</p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card d-flex flex-column flex-md-row">
                <img src="{{ Vite::asset('resources/images/fasilitas7.webp') }}" class="card-img-top ms-4 mt-4 me-4 mb-4" alt="..." style="width: 300px;">
                <div class="card-body me-1">
                  <h5 class="card-title-top mt-4  ">Kantin</h5>
                  <p class="card-text">Terdapat kantin yang menyediakan berbagai masakan dan hidangan sehat.</p>
                </div>
            </div>
        </div>
        <div class="col">
          <div class="card d-flex flex-column flex-md-row">
            <img src="{{ Vite::asset('resources/images/fasilitas2.jpg') }}" class="card-img-top ms-4 mt-4 me-4 mb-4" alt="..." style="width: 300px;">
            <div class="card-body me-1">
              <h5 class="card-title-top mt-4  ">Alat Modern</h5>
              <p class="card-text">Alat yang digunakan merupakan alat modern dan canggih sehingga meminimalisir terjadinya kesalahan.</p>
            </div>
          </div>
        </div>

        <div class="col">
            <div class="card d-flex flex-column flex-md-row">
                <img src="{{ Vite::asset('resources/images/fasilitas5.jpg') }}" class="card-img-top ms-4 mt-4 me-4 mb-4" alt="..." style="width: 300px;">
                <div class="card-body me-1">
                  <h5 class="card-title-top mt-4  ">Ruang Rawat</h5>
                  <p class="card-text">Ruang rawat pasien didesain senyaman mungkin dan tentunya bersih, sehingga pasien mendapat vibes positif.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-2 bg-light text-dark mt-5">
        <br><br>
        <div class="teks">
            <h2 style="font-weight: bold"><center>Klinik Kesehatan Dharma Sekawan</center></h2>
            <br>
            <h3 style="font-weight: bold"><center>Kelebihan</center></h3>
            <br>
    </div>
    <div class="tekstentang">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"><strong>
                    1. Tenaga Medis Profesional
                </strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                Klinik Dharma Sekawan memiliki tim medis yang terlatih dan berpengalaman, termasuk dokter, perawat, dan tenaga medis lainnya yang dapat memberikan pelayanan yang efisien dan berkualitas.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"><strong>
                    2. Peralatan Medis Modern
                </strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                Klinik Dharma Sekawan dilengkapi dengan peralatan medis terkini dan modern, yang membantu dalam diagnosis dan perawatan yang lebih akurat dan efektif.
                </div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"><strong>
                    3. Fasilitas yang Nyaman
                </strong>
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Klinik Dharma Sekawan selalu mengedepankan kenyamanan pasien. Fasilitas yang bersih, nyaman, dan ramah dapat menciptakan pengalaman yang lebih baik bagi pasien.
                </div>
            </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour"><strong>
                    4. Waktu Tunggu yang Singkat
                </strong>
                </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Pasien akan mendapatkan waktu tunggu yang lebih pendek untuk mendapatkan pemeriksaan atau layanan, sehingga pasien tidak perlu menunggu terlalu lama. ini terjadi karena Klinik Dharma Sekawan menggunakan sistem antrian online dalam pelayanannya
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive"><strong>
                    5. Pelayanan dan Perawatan yang Personal dan komprehensif
                </strong>
                </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Klinik Dharma Sekawan berusaha untuk memberikan pelayanan yang personal dan memahami kebutuhan individu pasien.
                </div>
                </div>
            </div>
        </div>
    </div>

    {{-- FOOTER --}}
    @include('layouts.footer')
    {{-- END FOOTER --}}
    @vite('resources/js/app.js')

</body>
</html>
