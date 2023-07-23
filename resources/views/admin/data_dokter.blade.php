<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/sass/app.scss')

	<title>{{$pageTitle}}</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">

		<ul class="side-menu top">
            <a href="#" class="brand">
                <i class='bx bxs-smile'></i>
                <span class="text">Administrator</span>
            </a>
			<li>
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
				<a href="#">
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
			<div class="container mt-4">
                <div class="row mb-0">
                    <div class="col-lg-9 col-xl-10">
                        <h4 class="mb-3">{{ $pageTitle }}</h4>
                    </div>
                    <div class="col-lg-3 col-xl-2">
                        <div class="d-grid gap-2">
                            <a href="" class="btn btn-primary">Create Employee</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="table-responsive border p-3 rounded-3">
                    <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                        <thead>
                            <tr>

                                <th>Nama Dokter</th>
                                <th>No. Handphone</th>
                                <th>Jenis Kelamin</th>
                                <th>Spesialis</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dokters as $dokter)
                                <tr>
                                    <td>{{ $dokter->name }}</td>
                                    <td>{{ $dokter->phone }}</td>
                                    <td>{{ $dokter->gender }}</td>
                                    <td>{{ $dokter->specialist->name}}</td>
                                </tr>'
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->



</body>
</html>
