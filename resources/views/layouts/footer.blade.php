{{-- FOOTER --}}
<div class="foot mt-5 text-light"><hr>
    <div class="py-2" id="footer">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3 mb-5">
                    <a href="" class="logo text-decoration-none">
                        <div class="d-flex">
                            <img class="img-fluid" style="width: 150px;" src="{{ Vite::asset('resources/images/logo.png') }}" alt="image">
                        </div>
                    </a>
                    <div class="tekstentang mt-2 text-light">
                        <small>Copyright © 2023 Dharma Sekawan. All rights reserved</small>
                    </div>

                </div>
                <div class="tekstentang col-6 col-lg-2 offset-lg-1 mb-5 ms-5">
                    <h5 class="text-info">Tautan Penting</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a class="text-light" href="{{route("beranda.index")}}">Beranda</a></li>
                        <li class="mb-2"><a class="text-light" href="{{route("tentang")}}">Tentang</a></li>
                        <li class="mb-2"><a class="text-light" href="{{route("dokter")}}">Dokter</a></li>
                        <li class="mb-2"><a class="text-light" href="{{route("poliklinik")}}">Poliklinik</a></li>
                    </ul>
                </div>
                <div class="tekstentang col-4 col-lg-3 offset-lg mb-5 ms-0 me-3">
                    <h5 class="text-info">Kontak Kami</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="https://github.com/"><i class="bi bi-github me-3 text-light" style="size"></i></a>
                            <a href="https://www.instagram.com/"><i class="bi bi-instagram me-3 text-light"></i></a>
                            <a href="https://www.whatsapp.com/"><i class="bi bi-whatsapp me-3 text-light"></i></a>
                            <a href="https://www.telkomsel.com/"><i class="bi bi-telephone me-3 text-light"></i></a>
                            <a href="https://mail.google.com/"><i class="bi bi-envelope me-3 text-light"></i></a>
                        </li>
                    </ul>
                    <p class="text-white">Jl. Ketintang No.156, Gayungan, Surabaya, Jawa Timur 60231</p>
                </div>
                <div class="tekstentang col-4 col-lg-3 offset-lg-1 mb-5 ms-4">
                    <h5 class="text-info">Jam Operasional</h5>
                    <ul class="list-unstyled text-white">
                        <li>1. Senin - Kamis (08.00 - 16.00)</li>
                        <li>2. Jumat (08.00 - 14.00)</li>
                        <li>3. Sabtu, Minggu, Hari Besar (Libur)</li>
                    </ul>
                </div>
                <section id="google-map">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.385639464917!2d112.7260852738168!3d-7.310500771874553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sInstitut%20Teknologi%20Telkom%20Surabaya!5e0!3m2!1sen!2sid!4v1689845017537!5m2!1sen!2sid" width="1130" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> <br><br>
                </section>
            </div>
        </div>
    </div>
</div>
{{-- END FOOTER --}}
