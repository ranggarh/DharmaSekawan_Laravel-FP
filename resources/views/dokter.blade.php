<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dokter</title>
<link rel="stylesheet" type="text/css" href=style.css>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@vite('resources/sass/app.scss')
<!-- costum css -->
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="tekstentang navbar sticky-top navbar-expand-lg bg-body-tertiary">
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
                        <a class="nav-link active" aria-current="page" href="#">Dokter</a>
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
    <div class="tekstentang" style="background-color: rgb(115, 169, 220)">
        <div class="dokter">
            <div class="container-fluid">
                <div class="row mx-auto" style="width: 60rem;">
                    <div class="card-deck mx-auto mt-5">
                        <div class="card">
                            <img src="/images/dokter1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Han Hyo Joo</center></h4>
                                <p class="card-text"><center>Spesialis Gigi</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 08127382282</small><br>
                                <small class="text-muted">Email       : hanhyojoo@gmail.com</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/images/dokter4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Park Shin-hye </center></h4>
                                <p class="card-text"><center>Spesialis Mata</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 0819894563</small><br>
                                <small class="text-muted">Email       : parkshinhye@gmail.com</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/images/dokter6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Seo Hyun-jin </center></h4>
                                <p class="card-text"><center>Spesialis Umum</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 0811331624</small><br>
                                <small class="text-muted">Email       : seohyunjin@gmail.com</small>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="card-deck mx-auto mt-5" style="width: 60rem;">
                        <div class="card">
                            <img src="/images/dokter3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Ha Ji-won </center></h4>
                                <p class="card-text"><center>Spesialis Jantung</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 08546521781</small><br>
                                <small class="text-muted">Email       : Hajiwonn231@gmail.com</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/images/dokter11.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Lisa Kang Sora </center></h4>
                                <p class="card-text"><center>Spesialis Anak</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 08128433202</small><br>
                                <small class="text-muted">Email       : lisakangsora18@gmail.com</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/images/dokter14.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Song Hye-kyo </center></h4>
                                <p class="card-text"><center>Spesialis Jantung</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 08199274263</small><br>
                                <small class="text-muted">Email       : songhyekyo@gmail.com</small>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="card-deck mx-auto mt-5" style="width: 60rem;">
                        <div class="card">
                            <img src="/images/dokter12.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Bu Yong-Joo</center></h4>
                                <p class="card-text"><center>Spesialis Mata</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 0811741124</small><br>
                                <small class="text-muted">Email       : buyongjoo89@gmail.com</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/images/dokter13.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Kang Dong-Joo</center></h4>
                                <p class="card-text"><center>Spesialis Umum</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 0852638221</small><br>
                                <small class="text-muted">Email       : kangdongjoon@gmail.com</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="/images/dokter5.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title"><center>Dr. Yoon Seo-Jung</center></h4>
                                <p class="card-text"><center>Spesialis Anak</center></p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">No.Telepon : 08214931624</small><br>
                                <small class="text-muted">Email       : yoonseojung@gmail.com</small>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>

