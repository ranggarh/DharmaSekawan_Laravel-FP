<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/sass/app.scss')

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">

		<ul class="side-menu top">
            <a href="#" class="brand">
                <i class='bx bxs-smile'></i>
                <span class="text">Administrator</span>
            </a>
			<li class="">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Data Pasien</span>

				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Data Perawatan</span>
				</a>
			</li>
            <li>
				<a href="{{route('data_dokter.index')}}">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Data Dokter</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Data Pegawai</span>
				</a>
			</li>
            <li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>

	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu text-white' ></i>
			<a href="#" class="nav-link text-white">Dharma Sekawan</a>
            <ul class="navbar-nav ms-auto">
            @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">

                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="bi-person-circle me-1"></i>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="bi bi-lock-fill"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Welcome to Our Admin Page</h1>

				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Data Pasien</p>
                        <button class="btn btn-primary text-white">Selengkapnya</button>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Data Perawatan</p>
                        <button class="btn btn-primary text-white">Selengkapnya</button>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Data Dokter</p>
                        <button class="btn btn-primary text-white">Selengkapnya</button>
					</span>
				</li>
                <li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Data Pasien</p>
                        <button class="btn btn-primary text-white">Selengkapnya</button>
					</span>
				</li>
                <li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Data Pasien</p>
                        <button class="btn btn-primary text-white">Selengkapnya</button>
					</span>
				</li>
                <li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Data Pasien</p>
                        <button class="btn btn-primary text-white">Selengkapnya</button>
					</span>
				</li>

			</ul>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


</body>
</html>
