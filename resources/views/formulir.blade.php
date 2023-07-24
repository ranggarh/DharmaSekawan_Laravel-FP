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
                        <form action="{{ route('admin.store')}}" class="row" method="POST">
                        @csrf
                            <h4>Selamat Datang</h4>
                            <h5>Silahkan isi data diri dibawah ini</h5><br>
                        <div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('firstName') }}" placeholder="Nama" aria-label="Full Name" name="fullname" id="fullname">
                            @error('fullname')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" placeholder="NIK" aria-label="NIK" name="nik" id="nik">
                            @error('nik')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" aria-label="Email" name="email" id="email">
                            @error('email')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="date" class="form-control @error('ttl') is-invalid @enderror" value="{{ old('ttl') }}" placeholder="Tanggal Lahir" aria-label="Tanggal Lahir" name="ttl" id="ttl" >
                            @error('ttl')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="row">
                        <div class="col">
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" placeholder="Alamat" aria-label="Alamat" name="alamat" id="alamat" >
                        </div>
                            @error('alamat')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        <div class="col">
                            <input type="text" class="form-control @error('telp') is-invalid @enderror" value="{{ old('telp') }}" placeholder="Nomor Telepon" aria-label="" name="telp" id="telp" >
                            @error('telp')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col">
                                <select name="specialist" id="specialist" class="form-select">
                                    @foreach ($specialists as $specialist)
                                        {{-- <option value="" disabled>Poli Layanan</option> --}}
                                        <option value="{{ $specialist->id }}" {{ old('specialist') == $specialist->id ? 'selected' : '' }}>{{ $specialist->code.' - '.$specialist->name }}</option>

                                        @endforeach
                                </select>
                                @error('specialist')
                                    <div class="text-danger"><small>{{ $message }} </small></div>
                                @enderror
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control @error('keluhan') is-invalid @enderror" value="{{ old('keluhan') }}" placeholder="Ceritakan Keluhan Anda" aria-label="" name="keluhan" id="keluhan">
                                @error('keluhan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
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
