<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Pendaftaran</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/fontawesome/css/all.min.css">
<!-- costum css -->
@vite('resources/sass/app.scss')
<link rel="stylesheet" href="/css/style.css">
</head>
<body>



    <section class="vh-100% bg-image"
    style="background-image: url('https://blog.assist.id/content/images/size/w2000/2019/04/7-alasan-pendaftaran-konsultasi-dokter-paperless-lebih-efektif-assist-id-sistem-informasi-klinik-software-klinik.jpg');">
    <!-- bio -->
    @include('layouts.nav')
    <div class="text-center py-3">
        {{-- <h3 class="h3">Formulir Pendaftaran</h3> --}}
        {{-- <section class="formulir">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card  ms-3 text-center">
                        <img  class="img-thumbnail" src="/images/logo.jpg">
                    </div>
                </div> --}}
                {{-- <div class="images mt-7 mb-9">
                    <img style="border-color:black;" src="/images/foto1.jpeg" alt="">
                </div> --}}
                <div class="content">
                    <section class="about">
                        <br>
                        <div class="container">
                        <div class="teks">
                        <form calss="row" method="POST">
                        @csrf
                            <h4>Selamat Datang</h4>
                            <h5>Silahkan isi data diri dibawah ini</h5><br>
                        <div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nama" aria-label="Full Name" name="fullname" id="fullname" >
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="NIK" aria-label="NIK" name="nik" id="nik">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email" id="email">
                        </div>
                        <div class="col">
                            <input type="date" class="form-control" placeholder="Tanggal Lahir" aria-label="Tanggal Lahir" name="ttl" id="ttl" >
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat" name="alamat" id="alamat" >
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="" name="telp" id="telp" >
                        </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <select name="poli" id="poli" class="form-control">
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
                                <input type="text" class="form-control" placeholder="Ceritakan Keluhan Anda" aria-label="" name="keluhan" id="keluhan">
                            </div>
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>Success !</strong> {{ session('success') }}
                        </div>
                        @endif
                            <button class="send p-2"><a style="text-decoration: none; color: white;">Submit</a></button>
                    </section>
                </div>
            </div>
        {{-- </section> --}}
    </div>
    </section>
    @vite('resources/js/app.js')
</body>
</html>
