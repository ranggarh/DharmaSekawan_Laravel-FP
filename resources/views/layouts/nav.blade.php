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
                    <a class="nav-link active" href="">Antrian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('kontak')}}">Kontak</a>
                </li>
                <li class="nav-item">
                    <button class="btn btn-primary me-3 ms-2" type="button" href="#"><a class="text-white" href="{{route('beranda.create')}}">Pendaftaran</a></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
