<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/fontawesome/css/all.min.css">
<!-- costum css -->
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <section class="vh-100 bg-image"
    style="background-image: url('https://blog.assist.id/content/images/size/w2000/2019/04/7-alasan-pendaftaran-konsultasi-dokter-paperless-lebih-efektif-assist-id-sistem-informasi-klinik-software-klinik.jpg');">
    <!-- bio -->
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
                        <button class="btn btn-primary me-3 ms-2" type="button" href="#">Pendaftaran</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center py-5">
        {{-- <h3 class="h3">Formulir Pendaftaran</h3> --}}
        <section class="formulir">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card  ms-3 text-center">
                        <img  class="img-thumbnail" src="/images/logo.jpg">
                    </div>
                </div>
                {{-- <div class="images mt-7 mb-9">
                    <img style="border-color:black;" src="/images/foto1.jpeg" alt="">
                </div> --}}
                <div class="content">
                    <section class="about">
                        <div class="container">
                        <div class="mt-5">
                        <div class=" mb-5">
                        <form calss="row" method="POST">
                        @csrf
                            <h4>Selamat Datang</h4>
                            <h5>Silahkan isi data diri dibawah ini</h5><br>
                        <div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NIK" aria-label="NIK">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" placeholder="Tanggal Lahir" aria-label="Tanggal Lahir">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <select name="position" id="position" class="form-control">
                                    <option value="1" disabled>Poli Layanan</option>
                                    <option value="2">Poli Umum</option>
                                    <option value="3">Poli Mata</option>
                                    <option value="4">Poli Gigi</option>
                                    <option value="5">Poli Jantung</option>
                                    <option value="6">Poli Anak</option>
                                </select>
                            </div>
                            </div><br>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Ceritakan Keluhan Anda" aria-label="">
                            </div>
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>Success !</strong> {{ session('success') }}
                        </div>
                        @endif
                            <button class="send"><a style="text-decoration: none; color: white;">Submit</a></button>
                    </section>
                </div>
            </div>
        </section>
    </div>
    </section>
</html>
