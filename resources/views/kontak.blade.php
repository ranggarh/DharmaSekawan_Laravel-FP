<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
    {{-- <link rel="stylesheet" type="text/css" href=style.css> --}}
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layouts.nav')
    <div class="col mx-auto">
    <section id="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.385639464917!2d112.7260852738168!3d-7.310500771874553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sInstitut%20Teknologi%20Telkom%20Surabaya!5e0!3m2!1sen!2sid!4v1689845017537!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact bg-body-tertiary"><br>
        <h2><center>Kontak Info</center></h2>
        <div class="container">
            <div class="kontakinfo">
                <div class="box">
                    <div class="icon"></div>
                    <div class="text"></div>
                    <h3><i class="bi bi-geo-alt-fill me-3"></i>Alamat</i></h3>
                        <p>Jl. Ketintang No.156, Gayungan, Surabaya, Jawa Timur 60231</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"></div>
                    <div class="text"></div>
                    <h3><i class="bi bi-telephone-fill me-3"></i>Telepon</i></h3>
                        <p>08191234552</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"></div>
                    <div class="text"></div>
                    <h3 class="ms-4"><i class="bi bi-envelope-heart-fill ms-5 me-3"></i>Email</i></h3>
                        <div class="ms-4">
                            <p class="ms-5">Dharmasekawan@gmail.com</p><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
    @vite('resources/js/app.js')
</body>
</html>
