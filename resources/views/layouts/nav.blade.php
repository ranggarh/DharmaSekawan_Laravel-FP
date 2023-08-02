{{--



<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img class="img-fluid" style="width: 55px;" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
        <a class="logo navbar-brand" href="#">Klinik Dharma Sekawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex flex-row flex-wrap ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('beranda.index')}}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('tentang')}}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('dokter')}}">Dokter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('poliklinik')}}">Poliklinik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('kontak')}}">Kontak</a>
                </li>

                <li class="nav-item">
                    <button class="btn btn-primary me-3 ms-2" type="button" href="#"><a class="text-white" href="{{route('antrian.index')}}">Ambil Antrian</a></button>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}



   <!-- ======= Top Bar ======= -->
   {{-- <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
    </div>
  </div> --}}
 <!-- ======= Header ======= -->
 <header id="header" class="sticky-top">




    <nav class="navbar sticky-top navbar-expand-lg ">
        <div class="container-fluid">
            <img class="img-fluid" style="width: 55px;" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
            <a class="logo navbar-brand" href="#">Klinik Dharma Sekawan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex flex-row flex-wrap ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('beranda.index')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('tentang')}}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dokter')}}">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('poliklinik')}}">Poliklinik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('kontak')}}">Kontak</a>
                    </li>

                    {{-- <li class="nav-item">
                        <button class="btn btn-primary me-3 ms-2" type="button" href="#"><a class="text-white" href="{{route('antrian.index')}}">Ambil Antrian</a></button>
                    </li> --}}

                    @auth
                    <div class="dropdown ms-3">
                        <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu">
                        @if (auth()->user()->roles === 'admin')
                            <li><a class="dropdown-item" href="/dashboard">Dashboard </a></li>
                        @else
                            <li><a class="dropdown-item" href="/antrian">Menu Antrian </a></li>
                        @endif

                            <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <span class="align-middle">Keluar</span>
                            </button>
                            </form>

                        </ul>
                    </div>
                @else
                    <a href="/login" class="btn btn-primary me-3 ms-2 text-white px-4 py-2">Login</a>
                @endauth

                </ul>
            </div>
        </div>
    </nav>

      </header><!-- End Header -->
